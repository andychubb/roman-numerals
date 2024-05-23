<?php

namespace App\Utilities;

class RomanNumerals
{
    const NUMERALS = [
        'C̅' => 100000,
        'X̅C̅' => 90000,
        'L̅' => 50000,
        'X̅L̅' => 40000,
        'X̅' => 10000,
        'MX̅' => 9000,
        'V̅' => 5000,
        'MV̅' => 4000,
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
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


    /**
     * Convert an integer into roman numerals.
     *
     * @param int $number The number to be converted.
     *
     * @return string The value of $number expressed in roman numerals.
     */
    public static function toNumerals(int $number): string
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

    /**
     * Convert a string of roman numerals into a number.
     *
     * @param string $roman The string to be converted.
     *
     * @return int The number that the string of roman numerals equates to.
     */
    public static function toNumber(string $roman): int
    {
        $result = 0;

        foreach(static::NUMERALS as $numeral => $numeralNumber) {
            while (strpos($roman, $numeral) === 0) {
                // While looping through the NUMERALS array, if we match a numeralNumber increment the result
                $result += $numeralNumber;
                // Remove the matched numeral from the string for the next run of the loop
                $roman = substr($roman, strlen($numeral));
            }
        }

        if (!empty($roman)) {
            // If there are any characters remaining then the roman numeral string must be invalid
            throw new \Exception('Invalid Roman Numeral');
        }

        return $result;
    }
}

