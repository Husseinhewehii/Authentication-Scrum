<?php

use App\Constants\Saluations;

if(!function_exists("validSaluations")){
    function validSaluations(){
        return substr(array_reduce(array_keys(Saluations::getSaluations()), fn($a, $b) => $a.','.$b), 1);
    }
 }