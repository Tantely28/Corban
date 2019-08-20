<?php

namespace App\Controller\api;

use App\Entity\Candidat;
use App\Repository\CandidatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CandidatController
 * @package App\Controller\api
 * @Route("/api")
 */
class CandidatController extends AbstractController
{

    /**
     * @Rest\Post("/create/candidat")
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function inscriptionCandidat(Request $request)
    {
        $candidat=new Candidat();
        if (!empty($request->get('nom')) && !empty($request->get('dateNaissance')) && !empty($request->get('situation')) && !empty($request->get('adresse')) && !empty(($request->get('ville')) && !empty($request->get('pays')) && !empty($request->get('telephone')) && !empty($request->get('sex')) && !empty($request->get('pseudo')) && !empty($request->get('password'))))
        {
            $candidat->setNom($request->get('nom'));
            $candidat->setDateNaissance(new \DateTime($request->get('dateNaissance')));
            $candidat->setSituationFamilier($request->get('situation'));
            $candidat->setAdresse($request->get('adresse'));
            $candidat->setVille($request->get('ville'));
            $candidat->setPays($request->get('pays'));
            $candidat->setEmail($request->get('email'));
            $candidat->setTelephone($request->get('telephone'));
            $candidat->setSex($request->get('sex'));
            $candidat->setPseudo($request->get('pseudo'));
            $candidat->setPassword(sha1($request->get('password')));
            $em=$this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();
            return new JsonResponse(['message' => 'Inscription réussit'], Response::HTTP_OK);

        }else{
            return new JsonResponse(['message' => 'Veuillez remplir tous les champs','test'=>$request->get('name')], Response::HTTP_OK);
        }
    }

        /**
         * @var CandidatRepository
         */
        private $candidat;

        public function __construct(CandidatRepository $candidat)
    {
        $this->candidat = $candidat;
    }

        /**
         * @param Request $request
         * @return JsonResponse
         * @Rest\Post("/login/candidat")
         */
        public function login(Request $request)
        {
            $candidat = $this->candidat->authentification($request->get('pseudo'), $request->get('password'));

            if (empty($candidat)) {
                return new JsonResponse(['message' => 'Le login et/ou le mot de passe est incorrect', 'status' => 'KO'], Response::HTTP_OK);
            } else {
                $formatted = [];

                foreach ($candidat as $candidat) {
                    $formatted = [
                        'id' => $candidat->getId(),
                        'nom' => $candidat->getNom(),
                        'adresse' => $candidat->getAdresse(),
                        'telephone' => $candidat->getTelephone(),
                        'email' => $candidat->getEmail(),
                        'user' => $candidat->getPseudo(),

                    ];
                }
                return new JsonResponse($formatted, Response::HTTP_OK);
            }
        }
}