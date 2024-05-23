<?php

namespace Tests\Unit;

use App\Utilities\RomanNumerals;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class RomanNumeralsTest extends TestCase
{
    public static function numbersProvider(): array
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [7, 'VII'],
            [8, 'VIII'],
            [9, 'IX'],
            [10, 'X'],
            [25, 'XXV'],
            [40, 'XL'],
            [50, 'L'],
            [75, 'LXXV'],
            [90, 'XC'],
            [100, 'C'],



        ];
    }
    /**
     * Test that supplied integer is converted into correct roman numeral.
     */
    #[DataProvider('numbersProvider')]
    public function test_integer_is_converted_to_roman_numeral($number, $romanNumeral): void
    {
        $this->assertEquals($romanNumeral, RomanNumerals::convert($number));
    }

}
