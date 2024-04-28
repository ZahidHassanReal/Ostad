<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


 $StringData=file_get_contents("php://input");
$PHPAsocArray=json_decode($StringData,true);

    setcookie("user_name",$PHPAsocArray['username'],[
        "expires"=>time()+ 10,
        "path"=>"/",
        "domain"=>"localhost",
        "secure"=>true,
        "httponly"=>true,
        "samesite"=>'lax'
    ]);

    echo "set cook suck";

}


if($_SERVER["REQUEST_METHOD"] == "GET"){

echo $_COOKIE["user_name"];

}


if($_SERVER["REQUEST_METHOD"] == "DELETE"){

     setcookie("user_name","",[
        "expires"=>time()-10,
        "path"=>"/",
        "domain"=>"localhost",

     ]);

     echo "dlete";
    }