<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Repository\CandidatRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CandidatController extends AbstractController
{

    /**
     * @var CandidatRepository
     */
    private $candidat;
    /**
     * @var ObjectManager
     */
    private $em;

    public function __construct(CandidatRepository $candidat, ObjectManager $em)
    {
        $this->candidat = $candidat;
        $this->em = $em;
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

    /**
     * @Route("/delete/candidat/{id}", name="delete_candidat")
     * @param Candidat $candidat
     * @param Request $request
     * @return Response|ResponseAlias
     */
    public function delete(Candidat $candidat, Request $request){
        if ($this->isCsrfTokenValid('delete' . $candidat->getId(), $request->get('_token'))){
            $this->em->remove($candidat);
            $this->em->flush();
        }
        return $this->redirectToRoute('liste_candidat');
    }
}
