<?php

namespace App\Utilities;

class RomanNumerals
{
    public static function convert(int $number): string
    {
        switch ($number) {
            case 1:
                return 'I';
            case 2:
                return 'II';
            case 3:
                return 'III';
            case 4:
                return 'IV';
            case 5:
                return 'V';
            default:
                return 'Invalid number';
        }
    }
}

