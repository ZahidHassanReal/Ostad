<?php 


echo "Hello world .";

echo "Todays date is ".date('d-m-y').  "<br/>";


// $newName = "real";
// file_put_contents("./data.txt", $newName . "\n", FILE_APPEND);
 $data = file_get_contents("./data.txt");

echo nl2br($data);


// $data = file_get_contents("http://localhost:8080/hello.php");

// echo nl2br($data);