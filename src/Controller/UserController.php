<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Document\User;
use Doctrine\ODM\MongoDB\DocumentManager as DocumentManager;
use App\Form\Type\UserType;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\HttpFoundation\Request;

class UserController extends AbstractController
{
    /**
     * @Route("user/add")
     */
    public function add(Request $request, UserPasswordEncoderInterface $encoder, DocumentManager $dm)
    {

        $user = new User();
        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $crypt = $encoder->encodePassword($user,$user->getRawpassword());
            $user->setPassword($crypt);

            $dm->persist($user);
            $dm->flush();
            return $this->redirectToRoute("app_user_read");
        }

        return $this->render("form.html.twig",["form"=>$form->createView(),"title"=>"Ajouter un utilisateur"]);

    }

    /**
     * @Route("/login")
     */
    public function login()
    {
        return $this->render('login.html.twig');
    }

    /**
     * @Route("user/update/{id}")
     */
    public function update(DocumentManager $dm, Request $request, $id, UserPasswordEncoderInterface $encoder)
    {
        $user = $dm->getRepository(User::class)->find($id);
        $form = $this->createForm(UserType::class,$user);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $crypt = $encoder->encodePassword($user,$user->getRawpassword());
            $user->setPassword($crypt);
            $user->setIsAdmin(false);

            $dm->flush();
            return $this->redirectToRoute("app_user_read");
        }

        return $this->render("form.html.twig",["form"=>$form->createView(),"title"=>"Modifier un utilisateur"]);
    }

    /**
     * @Route("user/read")
     */
    public function read(DocumentManager $dm)
    {
        $User = $dm->getRepository(User::class)->findAll();

    

        return $this->render("user/index.html.twig",["form"=>$User]);

    }

    /**
     * @Route("user/delete/{id}")
     */
    public function delete(DocumentManager $dm,$id)
    {
        $user = $dm->getRepository(User::class)->find($id);
        $dm->remove($user);
        $dm->flush();

        return $this->redirectToRoute("app_user_read");
    }
}