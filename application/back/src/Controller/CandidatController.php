<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Repository\CandidatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\Routing\Annotation\Route;

class CandidatController extends AbstractController
{
    private $candidat;

    public function __construct(CandidatRepository $candidat)
    {
        $this->candidat=$candidat;
    }
    /**
     * @return ResponseAlias
     * @Route("/liste/candidat", name="liste_candidat")
     */
    public function read()
    {
        $candidat=$this->candidat->findCandidat();
        return $this->render('admin/candidat/list.html.twig',[
            'candidat'=>$candidat,
            'current_menu' => 'candidat'
        ]);
    }

    /**
     * @param Candidat $candidat
     * @Route("/show/candidat/{id}", name="show_candidat")
     * @return ResponseAlias
     */
    public function show(Candidat $candidat)
    {
        return $this->render('admin/candidat/show.html.twig',[
            'candidat'=>$candidat,
            'current_menu' => 'candidat'
        ]);
    }
}
