<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {    
        return $this->render('home/index.html.twig', [
           
        ]);
    }

    /**
     * @Route("/articles", name="articles_list")
     */
    public function articlesList()
    {    
        return $this->render('home/articles.list.html.twig', [
           
        ]);
    }


}
