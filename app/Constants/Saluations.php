<?php

namespace App\Constants;

final class Saluations
{
    const MR = 1;
    const MRS = 2;
    const MX = 3;

    public static function getSaluations()
    {
        return [
            Saluations::MR => 'Mr.',
            Saluations::MRS => 'Mrs/Ms.',
            Saluations::MX => 'Mx.'
        ];
    }

    public static function getSaluation($key = '')
    {
        if (!array_key_exists($key, self::getSaluations())) {
            return "";
        }
        return self::getSaluations()[$key];
    }
    
}
