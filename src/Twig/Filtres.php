<?php
namespace App\Twig;

use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class Filtres extends AbstractExtension {

    public function getFilters()
    {
        return [
            new TwigFilter('format_prix', [$this, 'formatPrix']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('format_prix', [$this, 'formatPrix']),
        ];
    }

    public function formatPrix(float $prix, string $devise): string{
        $prix = number_format($prix, 3, ",", " ");
        if($devise == "$"){
            return $devise . " " . $prix;
        }
        return $prix . " " . $devise;
    }

}