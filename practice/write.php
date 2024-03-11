<?php

$fp = fopen("./data.txt","a+");
for ($i = 0; $i < 10; $i++) {
fwrite($fp,"hello world {$i}\n");

}

fwrite( $fp,"wou\n");