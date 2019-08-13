<?php

namespace App\Controller\api;

use App\Entity\Candidat;
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
     */
    public function inscriptionCandidat(Request $request)
    {
        $candidat=new Candidat();
        if (!empty($request->get('nom')) && !empty($request->get('dateNaissance')) && !empty($request->get('situation')) && !empty($request->get('adresse')) && !empty(($request->get('ville')) && !empty($request->get('pays')) && !empty($request->get('telephone')) && !empty($request->get('sex')) && !empty($request->get('pseudo')) && !empty($request->get('password'))))
        {
            $candidat->setNom($request->get('nom'));
            $candidat->setDateNaissance($request->get('dateNaissance'));
//            $candidat->setDateNaissance(new \DateTime());
            $candidat->setSituationFamilier($request->get('situation'));
            $candidat->setAdresse($request->get('adresse'));
            $candidat->setVille($request->get('ville'));
            $candidat->setPays($request->get('pays'));
            $candidat->setEmail($request->get('email'));
            $candidat->setTelephone($request->get('telephone'));
            $candidat->setSex($request->get('sex'));
            $candidat->setPseudo($request->get('pseudo'));
            $candidat->setPassword($request->get('password'));
            $em=$this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();
            return new JsonResponse(['message' => 'Votre message est envoyée'], Response::HTTP_OK);

        }else{
            return new JsonResponse(['message' => 'Veuillez remplir tous les champ','test'=>$request->get('name')], Response::HTTP_OK);
        }


    }
}