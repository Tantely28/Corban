<?php


namespace App\Controller\api;


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

        if(!empty($offre)){
            return new JsonResponse(['message'=>'Il n\'y a aucun offre d\'emplies']);
        }else{
            $datas=[];

            foreach ($offres as $offre){
                $datas[]=[
                    'id'=>$offre->getId(),
                    'poste'=>$offre->getTitre(),
                    'dateLimite'=>$offre->getDateLimite(),
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
}