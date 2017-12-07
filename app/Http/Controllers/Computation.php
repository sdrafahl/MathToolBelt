<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

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

    public function calculateNumericalIntegration(Request $request) {
        $functionString = $request->get('function');
        Log::info($functionString);
        $lambda = create_function('$x', 'return ' . $functionString . ';');
        $width = $request->get('width');
        $from = $request->get('from');
        $to = $request->get('to');

        $numRectangles = ($to - $from)/$width;
        $sum = 0;
        $x = $from;

        while($x < $to) {
            $sum += $width * $lambda($x);
            $x += $width;
        }

        return response()->json([
            'sum' => $sum,
        ]);
    }

    public function matrixSum(Request $request) {

        $alphabet = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J",
        "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");

        $height = $request->get('height');
        $width = $request->get('width');
        $sum = 0;

        for($x = 0; $x <= $height;$x++) {
            for($y = 1; $y <= $width;$y++) {
                $sum += $request->get($y . $alphabet[$x]);
            }
        }
        
        Log::info($request);
        return response()->json([
            'sum' => $sum,
        ]);
    }
}
