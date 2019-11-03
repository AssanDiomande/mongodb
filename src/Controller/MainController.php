<?php 

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

Class MainController extends AbstractController
{
     /**
     * @Route("/index")
     */
    public function home()
    {
        return $this->render('home.html.twig');
    }
}