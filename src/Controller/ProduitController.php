<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produits/{categorie}', name: 'app_produit')]
    public function index(Request $request, $categorie): Response
    {
        $produits = [
            "ordinateurs" => ["Pc Portable Lenovo", "Pc portable Asus", "Pc portable HP"],
            "ecrans" => ["Ecran Dell 19.5 E2016HV", "Ecran HP 24fH 24 LED", "Ecran Philips"],
            "stockage" => ["Disque dur externe Toshiba", "Disque dur externe SSD", "Disque dur externe Antichocs", "Disque dur externe HIKVISION"]
        ];
        if(isset($produits[$categorie])){
            $liste = $produits[$categorie];
        }
        else{
            $liste = [];
        }
        return $this->render("produits.html.twig", [
            "titre" => $categorie,
            "produits" => $liste,
            "nombre" => count($liste)
        ]);
    }

    #[Route("/test", name:"test")]
    public function test(){
        $tab = ["A", "B", "C", "D"];
        return $this->render("test.html.twig", [
            "nom" => "<strong>Mon nom</strong>",
            "tel" => 11111,
            "nombres"=> $tab
        ]);
    }
}
