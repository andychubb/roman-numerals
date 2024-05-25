<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Utilities\RomanNumerals;
use Illuminate\Http\Request;

class RomanNumeralsController extends Controller
{
    public function convert(Request $request)
    {
        $input = $request->input('value');

        try {
            $romanNumerals = new RomanNumerals();
            if (is_numeric($input)) {
                $converted = $romanNumerals->toNumerals((int)$input);
            } else {
                $converted = $romanNumerals->toNumber($input);
            }
            return redirect()->back()->with('convertedValue', $converted);
        } catch (\InvalidArgumentException $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
