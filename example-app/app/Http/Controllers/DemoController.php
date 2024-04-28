<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DemoController extends Controller
{
    function Demo1(){
        return true;
    }



    function Demo2(){

        $city=array('Dhaka ','Rajshahi','Rangpur');

        $assc=array(['name'=>'real','age'=>27],['name'=>'real','age'=>27]);

        return $city;
    }



    function Demo3():JsonResponse{
        $city=array('Dhaka ','Rajshahi','Rangpur');

        $assc=array(['name'=>'real','age'=>27],['name'=>'real','age'=>27]);

        return response()->json($assc);
    }

    function Demo4():JsonResponse{
        $assc=array(['name'=>'real','age'=>27],['name'=>'real','age'=>27]);
        return response()->json(['status'=>'success', 'data'=>$assc]);
    }

   function Demo5(){

        return redirect(to:"Demo1 "); 

   }


   function Demo6() :BinaryFileResponse {

    $path="laravel.png";
    return response()->file($path);

   }

   function Demo7() :BinaryFileResponse {

    $path="laravel.png";
    return response()->download($path);

   }

   function Demo8(){
    $name="Real";
    $value="ostad-123";
    $expirTime=60;
    $path="/";
    $domain=$_SERVER['SERVER_NAME'];
    $secure=true;
    $httpOnly=true;

    return response(content:"Cook set sucess")->cookie(
        $name,$value,$expirTime,$path,$domain,$secure,$httpOnly
    );

   }


   function Demo9(){
    
   }




}
