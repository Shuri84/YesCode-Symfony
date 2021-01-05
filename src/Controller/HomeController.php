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
        // Je crée un tableau associatif
        $games = [
            "StarCraft 2" => 8,
            "BF6" => 128,
            "Métro Exodus" => 1
        ];
        
        return $this->render('home/index.html.twig', [
            'name'  => 'Page d\'accueil',
            "games" => $games
        ]);
    }
}
