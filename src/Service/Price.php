<?php

namespace App\Service;

class Price {

    public function ttc($prixht){
        return $prixht * 1.2;
    }

}