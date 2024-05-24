<?php

namespace Tests\Feature;

use App\Utilities\RomanNumerals;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RomanNumeralsControllerTest extends TestCase
{

    public function test_it_converts_from_numbers_to_roman_numerals_correctly()
    {
        $expectedResult = 'MMXXIV'; //2024

        $response = $this->postJson('/convert', ['value' => 2024]);

        $response->assertStatus(200);
        $response->assertJsonStructure(['convertedValue']);
        $this->assertEquals($expectedResult, $response->json()['convertedValue']);
    }

    public function test_it_converts_roman_numerals_to_numbers_correctly()
    {
        $expectedResult = 2024;

        $response = $this->postJson('/convert', ['value' => 'MMXXIV']);

        $response->assertStatus(200);
        $response->assertJsonStructure(['convertedValue']);
        $this->assertEquals($expectedResult, $response->json()['convertedValue']);
    }

    public function test_it_returns_an_error_for_an_invalid_input()
    {
        $response = $this->postJson('/convert', ['value' => 'ZZ']);

        $response->assertStatus(400);
        $response->assertJsonStructure(['error']);
        $this->assertStringContainsString('Invalid Roman Numeral', $response->json()['error']);
    }

    public function test_it_returns_an_error_if_a_value_is_passed_out_of_range()
    {
        $response = $this->postJson('/convert', ['value' => '100001']);

        $response->assertStatus(400);
        $response->assertJsonStructure(['error']);
        $this->assertStringContainsString('Number must be between 1 and 100,000.', $response->json()['error']);
    }
}
