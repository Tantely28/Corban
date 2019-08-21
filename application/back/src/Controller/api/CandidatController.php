<?php

namespace App\Controller\api;

use App\Entity\Candidat;
use App\Entity\CV;
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

    /**
     * @Rest\Post("/create/cvCandidat")
     * @param Request $request
     * @return JsonResponse
     * @throws \Exception
     */
    public function ajoutCVCandidat(Request $request)
    {
        $cvCandidat=new CV();
        if (!empty($request->get('candidat_id')) && !empty($request->get('photo')) && !empty($request->get('cv')) && !empty($request->get('formation')) && !empty(($request->get('experience')) && !empty($request->get('competence')) && !empty($request->get('langue')) && !empty($request->get('loisir'))))
        {
            $cvCandidat->setCandidat($request->get('candidat_id'));

            $filePhoto = $request->get('photo');
            $filenamePhoto=md5(uniqid()).'.'.$filePhoto->guessExtension();
            $filePhoto->move($this->getParameter('upload_directory'), $filenamePhoto);
            $cvCandidat->setPhoto($filenamePhoto);

            $fileCV = $request->get('cv');
            $filenameCV=md5(uniqid()).'.'.$fileCV->guessExtension();
            $fileCV->move($this->getParameter('upload_directory'), $filenameCV);
            $cvCandidat->setCv($filenameCV);

            $cvCandidat->setFormation($request->get('formation'));
            $cvCandidat->setExperience($request->get('experience'));
            $cvCandidat->setCompetence($request->get('competence'));
            $cvCandidat->setLangue($request->get('langue'));
            $cvCandidat->setLoisir($request->get('loisir'));

            $em=$this->getDoctrine()->getManager();
            $em->persist($cvCandidat);
            $em->flush();
            return new JsonResponse(['message' => 'Information sauvegardé'], Response::HTTP_OK);

        }else{
            return new JsonResponse(['message' => 'Veuillez remplir tous les champs','test'=>$request->get('name')], Response::HTTP_OK);
        }
    }
}