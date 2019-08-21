<?php

namespace App\Controller;

use App\Entity\OffreEmplois;
use App\Form\OffreEmploisType;
use App\Repository\AdminRepository;
use App\Repository\OffreEmploisRepository;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{

    /**
     * @var AdminRepository
     */
    private $repository;
    /**
     * @var SessionInterface
     */
    private $session;
    /**
     * @var ObjectManager
     */
    private $em;
    /**
     * @var OffreEmploisRepository
     */
    private $emploisRepository;

    public function __construct(
        AdminRepository $repository,
        SessionInterface $session,
        ObjectManager $em,
        OffreEmploisRepository $emploisRepository)
    {
        $this->repository = $repository;
        $this->session = $session;
        $this->em = $em;
        $this->emploisRepository = $emploisRepository;
    }

    /**
     * @Route("/", name="login_admin")
     * @param Request $request
     * @return Response
     */
    public function login(Request $request)
    {
        $form=$this->createFormBuilder()
            ->add('username',TextType::class,[
                'label'=> "Nom d'utilisateur",
                'attr'=>[
                    'placeholder'=>"Nom d'utilisateur",
                    'class'=>'form-control'
                ]
            ])
            ->add('password',PasswordType::class,[
                'label'=> "Mot de passe",
                'attr'=>[
                    'placeholder'=>"Mot de passe",
                    'class'=>'form-control'
                ]
            ])->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $username=$request->request->get("form")['username'];
            $password=$request->request->get("form")['password'];
            $admin=$this->repository->findAdmin($username,$password);
            if(count($admin)==1){
                $session=$this->session;
                $session->set('user_admin',$username);
                $sessionUsernameAdmin=$session->get('username');

                return $this->redirectToRoute('accueil');
            }else{
                $err="Nom d'utilisateur ou Mot de passe incorrecte";
                return $this->render('admin/login.html.twig',[
                    'form'=>$form->createView(),
                    'erreur'=>$err
                ]);
            }
        }
        return $this->render('admin/login.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/acceuil", name="accueil")
    */
    public function homeAdmin(){
        return $this->render('admin/home.html.twig');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(){
        $this->session->clear();
        return $this->redirectToRoute('login_admin');
    }

    /**
     * @return Response
     * @Route("/service", name="service_admin")
     */
    public function service(): Response
    {
        return $this->render('service.html.twig');
    }

    /**
     * @return Response
     * @Route("/offreEmplois/index", name="offre_emplois_index")
     */
    public function offreEmplois(): Response
    {
        $offreEmplois = $this->emploisRepository->findAll();
        return $this->render('admin/offreEmplois/index.html.twig', [
            'current_menu' => 'offre',
            'offreEmplois' => $offreEmplois
        ]);
    }

    /**
     * @param Request $request
     * @return Response
     * @Route("/offreEmplois/new", name="offre_emplois_new")
     */
    public function newEmpois(Request $request): Response
    {
        $empois = new OffreEmplois();
        $form = $this->createForm(OffreEmploisType::class, $empois);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $this->em->persist($empois);
            $this->em->flush();
            return $this->redirectToRoute('offre_emplois_index');
        }

        return $this->render('admin/offreEmplois/new.html.twig', [
            'form' => $form->createView(),
            'current_menu' => 'offre'
        ]);
    }

    /**
     * @param OffreEmplois $offreEmplois
     * @return Response
     * @Route("/offreEmplois/show/{id}", name="offre_emplois_show")
     */
    public function showEmpois(OffreEmplois $offreEmplois): Response
    {
        return $this->render('admin/offreEmplois/show.html.twig', [
            'offre' => $offreEmplois
        ]);
    }
}
