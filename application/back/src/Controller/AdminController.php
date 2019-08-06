<?php

namespace App\Controller;

use App\Repository\AdminRepository;
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

    public function __construct(AdminRepository $repository,SessionInterface $session)
    {
        $this->repository = $repository;
        $this->session = $session;
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
                $err="Username ou password incorrect";
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
}
