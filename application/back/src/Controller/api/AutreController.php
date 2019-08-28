<?php


namespace App\Controller\api;


use App\Entity\OffreEmplois;
use App\Repository\OffreEmploisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * Class AutreController
 * @package App\Controller\api
 * @Route("/api")
 */
class AutreController extends AbstractController
{
    private $offre;

    public function __construct(OffreEmploisRepository $offre)
    {
        $this->offre=$offre;
    }

    /**
     * @Rest\Get("/read/offre")
     */
    public function offre()
    {
        $offres=$this->offre->findOffre();

        if(empty($offres)){
            return new JsonResponse(['message'=>'Il n\'y a aucun offre d\'emplies']);
        }else{
            $datas=[];

            foreach ($offres as $offre){
                $datas[]=[
                    'id'=>$offre->getId(),
                    'poste'=>$offre->getTitre(),
                    'dateLimite'=>$offre->getDateLimite()->format('d-m-Y'),
                    'contrat'=>$offre->getContrat(),
                    'activite'=>$offre->getActivite(),
                    'mission'=>$offre->getMission(),
                    'profile'=>$offre->getProfil(),
                    'reference'=>$offre->getReference(),
                ];
            }
            return new JsonResponse($datas,Response::HTTP_OK);
        }
    }

    /**
     * @Rest\Get("/read/of/{id}")
     */
    public function offreOne(OffreEmplois $emplois)
    {
        $date=new \DateTime();
        $offre=$this->offre->findOffreOne($emplois->getId());

        if(empty($offre)){
            return new JsonResponse(['message'=>'Il n\'y a aucun offre d\'emplies']);
        }else{
            $datas=[];

            foreach ($offre as $of){
                $datas=[
                    'id'=>$of->getId(),
                    'poste'=>$of->getTitre(),
                    'dateLimite'=>$of->getDateLimite()->format('d-m-Y'),
                    'contrat'=>$of->getContrat(),
                    'activite'=>$of->getActivite(),
                    'mission'=>$of->getMission(),
                    'profile'=>$of->getProfil(),
                    'reference'=>$of->getReference(),
                ];
            }
            return new JsonResponse($datas,Response::HTTP_OK);
        }

    }
}