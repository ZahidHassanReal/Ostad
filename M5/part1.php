<?php 

header('Content-Type: application/json');

$AsocArray=[
    ['name'=>'Real','Age'=>31],
    ['name'=>'Real','Age'=>31],
    ['name'=>'Real','Age'=>31],
    ['name'=>'Real','Age'=>31],
];

$JSON=json_encode($AsocArray);



echo $JSON;