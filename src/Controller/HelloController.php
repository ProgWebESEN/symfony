<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    public function sayHello(Request $request, $nom): Response{
        return new Response("Salut $nom");
        
    }

    /**
     * @Route("/calculage/{annee<\d{4}>?2000}")
     */
    public function getAge(Request $request, int $annee): Response{
        $age = date("Y") - $annee;
        return new Response("Votre âge est : $age");
    }


}
