<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacaoController extends Controller {
    public function somar($n1, $n2) {
        $resultado = $n1 + $n2;
        $sinal = '+';

        return view('resultado', compact('resultado', 'n1', 'n2', 'sinal'));
    }

    public function subtrair($n1, $n2) {
        $resultado = $n1 - $n2;
        $sinal = '-';

        return view('resultado', compact('resultado', 'n1', 'n2', 'sinal'));
    }

    public function multiplicar($n1, $n2) {
        $resultado = $n1 * $n2;
        $sinal = 'x';

        return view('resultado', compact('resultado', 'n1', 'n2', 'sinal'));
    }

    public function dividir($n1, $n2) {
        $resultado = $n1 / $n2;
        $sinal = '/';

        return view('resultado', compact('resultado', 'n1', 'n2', 'sinal'));
    }
}
