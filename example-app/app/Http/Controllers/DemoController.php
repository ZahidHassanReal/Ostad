<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\JsonResponse;

class DemoController extends Controller
{
//     function Demo1(){
//         return true;
//     }



//     function Demo2(){

//         $city=array('Dhaka ','Rajshahi','Rangpur');

//         $assc=array(['name'=>'real','age'=>27],['name'=>'real','age'=>27]);

//         return $city;
//     }



//     function Demo3():JsonResponse{
//         $city=array('Dhaka ','Rajshahi','Rangpur');

//         $assc=array(['name'=>'real','age'=>27],['name'=>'real','age'=>27]);

//         return response()->json($assc);
//     }

//     function Demo4():JsonResponse{
//         $assc=array(['name'=>'real','age'=>27],['name'=>'real','age'=>27]);
//         return response()->json(['status'=>'success', 'data'=>$assc]);
//     }

//    function Demo5(){

//         return redirect(to:"Demo1 ");

//    }


//    function Demo6() :BinaryFileResponse {

//     $path="laravel.png";
//     return response()->file($path);

//    }

//    function Demo7() :BinaryFileResponse {

//     $path="laravel.png";
//     return response()->download($path);

//    }

//    function Demo8(){
//     $name="Real";
//     $value="ostad-123";
//     $expirTime=60;
//     $path="/";
//     $domain=$_SERVER['SERVER_NAME'];
//     $secure=true;
//     $httpOnly=true;

//     return response(content:"Cook set sucess")->cookie(
//         $name,$value,$expirTime,$path,$domain,$secure,$httpOnly
//     );

//    }


//    function Demo9(){

//           return response(content:"heda set sucess")
//           ->header('key:real1', values:'zarin-12')
//           ->header('key:real2', values:'Afrin-12')
//           ->header('key:real3', values:'afia-12');

//    }

//     function Demo10(){

//         return view(view:'hello');
//     }



// function SessionPut(Request $request):bool
// {
//      $email=$request->email;
//      $request->session()->put('userEmail',$email);
//      return true;
// }

// function SessionPull (Request $request):string
// {
//     return $request->session()->pull(key:'userEmail', default:'default');
// }

// function SessionGet (Request $request):string
// {
//     return $request->session()->get(key:'userEmail', default:'default');
// }

// function SessionForget (Request $request):bool
// {
//      $request->session()->forget(keys:'userEmail');
//      return true;
// }
// function SessionFlash (Request $request):bool
// {
//      $request->session()->flush();
//      return true;
// }


    function DemoAction1():string
    {
         return " Sorry drubo";
    }
        function DemoAction2():string
    {
         return " Sorry please drubo ";
    }
            function DemoAction3():string
    {
         return " i love u drubo ";
    }

            function DemoAction4():string
    {
         return " i love u ";
    }
}
