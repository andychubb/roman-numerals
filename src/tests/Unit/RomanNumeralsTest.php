<?php

namespace Tests\Unit;

use App\Utilities\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /**
     * Test that 1 is converted into I.
     */
    public function test_integer_1_is_converted_to_I(): void
    {
        $this->assertEquals('I', RomanNumerals::convert(1));
    }
}
