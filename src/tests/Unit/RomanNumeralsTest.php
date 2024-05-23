<?php

namespace Tests\Unit;

use App\Utilities\RomanNumerals;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

class RomanNumeralsTest extends TestCase
{
    // Using the following as a guide on roman numerals up to 100000
    // https://mammothmemory.net/maths/numbers/roman-numerals/roman-numerals-from-1000-to-1-million.html

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
            [250, 'CCL'],
            [400, 'CD'],
            [500, 'D'],
            [750, 'DCCL'],
            [900, 'CM'],
            [1000, 'M'],
            [2000, 'MM'],
            [3000, 'MMM'],
            [4000, 'MV̅'],
            [5000, 'V̅'],
            [6000, 'V̅M'],
            [7000, 'V̅MM'],
            [8000, 'V̅MMM'],
            [9000, 'MX̅'],
            [10000, 'X̅'],
            [25000, 'X̅X̅V̅'],
            [40000, 'X̅L̅'],
            [50000, 'L̅'],
            [75000, 'L̅X̅X̅V̅'],
            [90000, 'X̅C̅'],
            [100000, 'C̅'],
        ];
    }

    /**
     * Test that supplied integer is converted into correct roman numeral.
     */
    #[DataProvider('numbersProvider')]
    public function test_integer_is_converted_to_roman_numeral($number, $romanNumeral): void
    {
        $this->assertEquals($romanNumeral, RomanNumerals::toNumerals($number));
    }

    /**
     * Test that supplied roman numeral is converted into correct mumber.
     */
    #[DataProvider('numbersProvider')]
    public function test_roman_numeral_is_converted_to_number($number, $romanNumeral): void
    {
        $this->assertEquals($number, RomanNumerals::toNumber($romanNumeral));
    }

    /**
     * Test to throw an exception if a number below 1 passed in to toNumerals.
     */
    public function test_cannot_convert_number_below_one(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        RomanNumerals::toNumerals(-1);
    }

    /**
     * Test to throw an exception if a number above 100,000 passed in to toNumerals.
     */
    public function test_cannot_convert_number_above_one_hundred_thousand(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        RomanNumerals::toNumerals(100001);
    }

    /**
     * Test to throw an exception if an invalid string is passed in to toNumber.
     */
    public function test_cannot_convert_an_invalid_roman_numeral_string(): void
    {
    
        $this->expectException(\InvalidArgumentException::class);
        RomanNumerals::toNumber('XXZ');

    }

}
