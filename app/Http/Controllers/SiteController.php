<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function triangle(Request $request)
    {
        $number = $request->input('number');


        $output = '';
        for($i = 1; $i <= $number; $i++){
            for($j = 1; $j <= $i; $j++){
                if($j == 1){
                    $output .= $i;
                }else{
                    $output .= "0";
                }
            }
            $output .= '<br>';
        }

        return $output;
    }

    public function ganjil(Request $request)
    {
        $number = $number = $request->input('number');

        $output = '';
        for($i = 1; $i <= $number; $i++){
            if($i % 2 == 1){
                $output .= $i;
            }
            $output .= ', ';
        }
        return $output;
    }

    public function prima(Request $request)
    {
        $number = $number = $request->input('number');

        $output = '';

        for($i = 1; $i <= $number; $i++){
            if($i == 1){
                continue;
            }
            else if($number % $i == 0){
                $output .= $i;
            }
        }
        return $output;
    }
}
