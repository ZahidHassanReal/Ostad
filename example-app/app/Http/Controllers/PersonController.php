<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    function getPerson(Request $request ,$name=null){
        $display = $request->input("display" , "profile");
        $limit = $request->input("limit" , 20);
       // $all = $request->all();
        //print_r($all);
       // die();
        return response("Hello {$name} - Displaying {$display} , Limit {$limit}", 200);

}
}
