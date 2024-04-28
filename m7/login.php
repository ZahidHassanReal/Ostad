<?php 

session_start();

$_SESSION["username"] = "REal";

header('Location: index.php');