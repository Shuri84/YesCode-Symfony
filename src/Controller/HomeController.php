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
        // Je déclare un tableau que j'envoie à la vue
        $games = ["StarCraft 2", "BF6" , "Métro Exodus"];
        
        return $this->render('home/index.html.twig', [
            'name'  => 'Page d\'accueil',
            "games" => $games
        ]);
    }
}
