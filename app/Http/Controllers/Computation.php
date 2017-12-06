<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Computation extends Controller
{
    public function calculatePi(Request $request) {
        $iterations = $request->get('iterations');
        $bottom = 1;
        $sum = 0;
        for ($x = 0; $x < $iterations; $x++) {
            if($x % 2 == 0) {
                $sum += 1.0/$bottom;
            } else {
                $sum -= 1.0/$bottom;
            }
            $bottom += 2.0;
        }
        $sum *= 4;
        return response()->json([
            'pi' => $sum,
        ]);
    }
}
