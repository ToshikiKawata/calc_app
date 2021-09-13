<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class calccontroller extends Controller
{
    public function result ($num1, $operator, $num2) {
    if ( $operator == 'addition' ) {
        $result = $num1 + $num2;
    } elseif ( $operator == 'subtraction' ) {
        $result = $num1 - $num2;
    } elseif ( $operator == 'multiplication' ) {
        $result =  $num1 * $num2;
    } elseif ( $operator == 'division' ) {
        $result = $num1 / $num2;
    } else {
        $result = "数字なし";
    }
    return view('message.calc', [
        'result' => $result
    ]);
}}