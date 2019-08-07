<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Temoignage;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use App\Repository\TemoignageRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
    /**
     * @var TemoignageRepository
     */
    private $temoignageRepository;

    public function __construct(ObjectManager $em, ClientRepository $clientRepository,TemoignageRepository $temoignageRepository)
    {
        $this->em = $em;
        $this->clientRepository = $clientRepository;
        $this->temoignageRepository = $temoignageRepository;
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
            ->add('secteur')->getForm();

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
     * @Route("/delete/client/{id}", name="client_delete")
     */
    public function delete(Client $client, Request $request): Response
    {
            $this->em->remove($client);
            $this->em->flush();
        return $this->redirectToRoute('client_index');
    }

    /**
     * @param Client $client
     * @param Request $request
     * @return Response
     * @Route("/ajout/temoignage?id={id}", name="ajout_temoin")
     */
    public function addTemoignage(Client $client,Request $request)
    {
        $temoingnage=new Temoignage();
        $form=$this->createFormBuilder($temoingnage)
            ->add('description',TextType::class,[
                'label'=>'Description',
                'attr'=>[
                    'placeholder'=>'Description'
                ]
            ])
            ->add('video',FileType::class,[
                'attr'=>[
                    'placeholder'=>'Choisissez votre fichier'
                ]
            ])
            ->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $file=$temoingnage->getVideo();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $temoingnage->setVideo($filename);

            $temoingnage->setClient($client);
            $this->em->persist($temoingnage);
            $this->em->flush();
            return $this->redirectToRoute('list_temoignage',['id'=>$client->getId()]);

        }

        return $this->render('admin/client/addTemoingnage.html.twig',[
            'current_menu' => 'client',
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/list/temoignage/{id}", name="list_temoignage")
     * @param Client $client
     * @return Response
     */
    public function temoignage(Client $client)
    {
        $temo=$this->temoignageRepository->findtem($client);
        return $this->render('admin/client/list.html.twig',[
            'tem'=>$temo
        ]);
    }
}
