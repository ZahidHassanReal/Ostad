<?php 

$lines = file("./data.txt");
echo "<pre>";
echo nl2br(print_r($lines, true));

echo "</pre>";