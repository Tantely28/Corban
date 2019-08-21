<?php

namespace App\Controller;

use App\Entity\Candidat;
use App\Entity\TemoignageCandidat;
use App\Form\TemoignageCandidatType;
use App\Repository\CandidatRepository;
use App\Repository\TemoignageCandidatRepository;
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

    /**
     * @Route("/list/temoignage/candidat/{id}", name="list_temoignage_candidat")
     * @param Candidat $candidat
     * @param TemoignageCandidat $temoignageCandidat
     * @return Response
     */
    public function temoignage(Candidat $candidat, TemoignageCandidatRepository $temRepo){
        $temoignageCandidat = $temRepo->findTem($candidat);
        return $this->render('admin/candidat/listTemoignage.html.twig', [
            'candidat' => $candidat,
            'current_menu' => 'candidat',
            'temoignage' => $temoignageCandidat
        ]);
    }

    /**
     * @param Candidat $candidat
     * @param Request $request
     * @return Response
     * @Route("/temoignage/{id}", name="add_temoignage_candidat")
     */
    public function addTemoignage(Candidat $candidat, Request $request){
        $temoignageCandidat = new TemoignageCandidat();
        $form = $this->createForm(TemoignageCandidatType::class, $temoignageCandidat);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $file = $form->get('video')->getData();
            $fileName = md5(uniqid()) . '.' .$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $fileName);
            $temoignageCandidat->setVideo($fileName);

            $temoignageCandidat->setCandidat($candidat);
            $this->em->persist($temoignageCandidat);
            $this->em->flush();
            return $this->redirectToRoute('list_temoignage_candidat', ['id' => $candidat->getId()]);
        }

        return $this->render('admin/candidat/addTemoignage.html.twig', [
            'candidat' => $candidat,
            'current_menu' => 'candidat',
            'form' => $form->createView()
        ]);
    }

    /**
     * @param TemoignageCandidat $temoignageCandidat
     * @Route("/see/temoignage_candidat/{id}", name="see_video_candidat")
     * @return Response
     */
    public function seeVideo(TemoignageCandidat $temoignageCandidat){
        return $this->render('admin/candidat/seeVideo.html.twig', [
            'temoin' => $temoignageCandidat,
            'current_menu' => 'candidat',
        ]);
    }
}
