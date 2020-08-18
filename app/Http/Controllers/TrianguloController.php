<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrianguloController extends Controller
{
    public function extriangulo() {
        return view('extriangulo');
    }
    public function soluciontri(Request $request) {
        $a = (float)$request->input('a');
        $b = (float)$request->input('b');

        $r1 = sqrt(($a*$a)+($b*$b));

        return view('soluciontri', [
            'a' => $a,
            'b' => $b,
            'r1' => $r1,
        ]);
    }
}
