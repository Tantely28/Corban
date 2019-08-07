<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
    /**
     * @var ObjectManager
     */
    private $em;
    /**
     * @var ClientRepository
     */
    private $clientRepository;

    public function __construct(ObjectManager $em, ClientRepository $clientRepository)
    {
        $this->em = $em;
        $this->clientRepository = $clientRepository;
    }

    /**
     * @Route("/client", name="client_index")
     * @return Response
     */
    public function index(): Response
    {
        $clients = $this->clientRepository->findAll();
        return $this->render('admin/client/index.html.twig', [
            'controller_name' => 'ClientController',
            'clients' => $clients,
            'current_menu' => 'client'
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/client/new", name="client_new")
     */
    public function new(Request $request): Response
    {
        $client = new Client();
        $form = $this->createForm(ClientType::class, $client);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $client->setPassword(sha1($client->getPassword()));
            $this->em->persist($client);
            $this->em->flush();

            return $this->redirectToRoute('client_index');
        }

        return $this->render('admin/client/new.html.twig', [
            'form' => $form->createView(),
            'current_menu' => 'client'
        ]);
    }

    /**
     * @param Client $client
     * @param Request $request
     * @return Response
     * @Route("/client/{id}", name="client_edit", methods="POST|GET")
     */
    public function edit(Client $client, Request $request): Response
    {
        $form = $this->createFormBuilder($client)
            ->add('nom')
            ->add('adresse')
            ->add('telephone')
            ->add('email')
            ->add('web')
            ->add('secteur')
            ->add('user')->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->em->flush();
            return $this->redirectToRoute('client_index');
        }

        return $this->render('admin/client/edit.html.twig', [
            'form' => $form->createView(),
            'current_menu' => 'client'
        ]);
    }

    /**
     * @param Client $client
     * @param Request $request
     * @return Response
     * @Route("/client/{id}", name="client_delete", methods="DELETE")
     */
    public function delete(Client $client, Request $request): Response
    {
        if ($this->isCsrfTokenValid('delete' . $client->getId(), $request->get('_token'))){
            $this->em->remove($client);
            $this->em->flush();
        }

        return $this->redirectToRoute('client_index');
    }
}
