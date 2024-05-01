<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function page(Request $request){


        // $num1= $request->num1;
        // $num2= $request->num2;
        // $sum= $num2+$num1;

        // $data=['result'=>$sum];
        // $data2=['msg'=>'This is a msgasfe'];
        // return view('hello', $data ,$data2);

        // $data=[
        //     ['name'=>'manik', 'city'=>'rgpur'],
        //     ['name'=>'anik', 'city'=>'ragpur'],
        //     ['name'=>'banik', 'city'=>'gagpur'],
        //     ['name'=>'sanik', 'city'=>'cagpur'],
        //     ['name'=>'tanik', 'city'=>'magagpur'],
        //     ['name'=>'fanik', 'city'=>'rapur'],
        // ];

        return view('home');

    }
}
