<?php

namespace App\Utilities;

class RomanNumerals
{
    const NUMERALS = [
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];

    public static function convert(int $number): string
    {
        $result = '';

        foreach(static::NUMERALS as $numeral => $numeralNumber) {
            while ($number >= $numeralNumber) {
                // As long as the number provided is greater than the numeral number then append the numeral to result
                $result .= $numeral;
                // Then subtract the numeral number for the next run of the loop
                $number -= $numeralNumber;
            }
        }

        return $result;
    }
}

