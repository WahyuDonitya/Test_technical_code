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
        $char = '';
        for($i = 1; $i <= strlen($number); $i++){
            $char = $number[$i - 1];
            for($j = 1; $j <= $i+1; $j++){
                if($j == 1){
                    $output .= $char;
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
                $output .= $i.", ";
            }
        }
        return $output;
    }

    public function prima(Request $request)
    {
        $number = $number = $request->input('number');

        $output = '';

        for($i = 1; $i <= $number; $i++){
            $flag = $this->isPrime($i);

            if($flag){
                $output .= $i.", ";
            }
        }
        return $output;
    }

    function isPrime($number) {
        if ($number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i === 0) {
                return false;
            }
        }

        return true;
    }
}
