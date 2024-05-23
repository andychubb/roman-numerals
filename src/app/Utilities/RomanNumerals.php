<?php

namespace App\Utilities;

class RomanNumerals
{
    const NUMERALS = [
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

