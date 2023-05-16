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
        dd($number);

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
        dd('coba');
    }
}
