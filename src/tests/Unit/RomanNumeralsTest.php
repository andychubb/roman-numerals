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
            [1, 'I']
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
