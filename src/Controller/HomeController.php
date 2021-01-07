<?php

namespace App\Controller;

use App\Entity\Fruit;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index(EntityManagerInterface $manager): Response
    {    

        // sans injection de dépendance, donc retirer l'injection
        // $manager = $this->getDoctrine()->getManager();

        $banane= new Fruit();
        $fraise= new Fruit();

        $banane->setName("banane plantain");
        $fraise->setName("charlotte aux fraises");

        // dit a doctrine qu'on veut sauvegarder le produit 
        $manager->persist($banane);

        $manager->persist($fraise);

        // Flush pour tout ! Excecute la requete 
        $manager->flush();

        // Le tout se déclenche en actualisant la page 
        // Provisoire bien sur 

        return $this->render('home/index.html.twig', [
            
        ]);
    }
    

}
