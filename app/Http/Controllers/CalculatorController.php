<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add($num1,$num2)
    {
        $sum = (int)$num1 + (int)$num2;
        return "Addition of numbers are: " . $sum;
    }


    public function subtract($num1,$num2)
    {
        $difference = (int)$num1 - (int)$num2;
        return "difference of numbers are: " . $difference;
    }
}
