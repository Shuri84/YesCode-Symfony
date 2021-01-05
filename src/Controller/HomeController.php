<?php

namespace App\Controller;

use stdClass;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(): Response
    {
        $user = new stdClass();
        $user->isConnected = false;
        
        return $this->render('home/index.html.twig', [
            'name' => 'Page d\'accueil',
            "user" => $user
        ]);
    }
}
