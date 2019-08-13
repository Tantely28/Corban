<?php


namespace App\Controller\api;


use App\Repository\ClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ClientController
 * @package App\Controller\api
 * @Route("/api")
 */
class ClientController extends AbstractController
{
    /**
     * @var ClientRepository
     */
    private $client;

    public function __construct(ClientRepository $client)
    {
        $this->client = $client;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     * @Rest\Post("/login/client")
     */
    public function login(Request $request)
    {
        $client=$this->client->authentification($request->get('user'),$request->get('password'));

        if (empty($client)) {
            return new JsonResponse(['message' => 'Le login et/ou le mot de passe sont incorrects','status'=>'KO'],Response::HTTP_OK);
        }else{
            $formatted = [];

            foreach ($client as $clients) {
                $formatted = [
                    'id' => $clients->getId(),
                    'nom' => $clients->getNom(),
                    'adresse' => $clients->getAdresse(),
                    'telephone' => $clients->getTelephone(),
                    'email' => $clients->getEmail(),
                    'web' => $clients->getWeb(),
                    'secteur' => $clients->getSecteur(),
                    'user' => $clients->getUser(),

                ];
            }
            return new JsonResponse($formatted,Response::HTTP_OK);
        }

    }


}