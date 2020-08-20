<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    public function calculadora() {
        return view('calculadora');
    }
    public function solucionsuma(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');

        $r1 = $a + $b;
        $r2 = $a - $b;
        $r3 = $a * $b;
        $r4 = $a / $b;
        $r5 = $a * $a;
        $r6 = $b * $b;

        return view('solucionsuma', [
            'a' => $a,
            'b' => $b,
            'r1' => $r1,
            'r2' => $r2,
            'r3' => $r3,
            'r4' => $r4,
            'r5' => $r5,
            'r6' => $r6,
        ]);
    }
}
