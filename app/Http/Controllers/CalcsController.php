<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcsController extends Controller
{
        public function result($joseph1, $operater, $joseph2){
        switch($operater){
        case 'addition':
            $result = $joseph1 + $joseph2;
            break;
        case 'subtraction':
            $result = $joseph1 - $joseph2;
            break;
        case 'multiplication':
            $result = $joseph1 * $joseph2;
            break;
        case 'division':
            $result = $joseph1 / $joseph2;
            break;
}

       return view("calcs", ["result" => $result]);
    }
}
