<?php

namespace Khairul\Fm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CalculatorController extends Controller
{
    //
    public function add($a, $b){

        $result = $a + $b;

	   // return view('fm::add', compact('result'));
       return view('courier', compact('result'));
    }

    public function subtract($a, $b){
    	echo $a - $b;
    }
}
