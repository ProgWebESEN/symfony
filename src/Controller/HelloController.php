<?php

namespace App\Controller;

use App\Service\Price;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Twig\Environment;

class HelloController extends AbstractController {

    public function sayHello(Request $request, $nom): Response{
        return new Response("Salut $nom");
        
    }

   
    #[Route("/calculage/{annee<\d{4}>?2000}")]
    public function getAge(Request $request, int $annee): Response{
        $age = date("Y") - $annee;
        return new Response("Votre âge est : $age");
    }

    #[Route("/salut", name:"salut")]
    public function salut(LoggerInterface $logger, Price $prix){
        $logger->error("Bonjour à tous");
        echo $prix->ttc(100);
        die("Salut");
    }


}
