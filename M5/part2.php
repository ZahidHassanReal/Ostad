<?php 

header('Content-Type: application/json');

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $StringData=file_get_contents("php://input");
    $PHPAsocArray=json_decode($StringData,true);


    print_r($PHPAsocArray);
}


if($_SERVER['REQUEST_METHOD'] == 'GET'){
    

    $StringData=file_get_contents("php://input");
    $PHPAsocArray=json_decode($StringData,true);

    $JSON = json_encode($PHPAsocArray);

echo $JSON;
}
