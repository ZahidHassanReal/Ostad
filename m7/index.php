<?php
session_start();

echo"hello ";


$loginUrl = "login.php";
$logoutUrl = "logout.php";
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo "<a href='$log ";
}
else {
    echo "Guest";
}

// $user = isset($_SESSION[""]) ? $_SESSION['data'] ;