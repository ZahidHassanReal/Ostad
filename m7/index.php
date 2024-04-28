<?php
session_start();

echo"hello ";


$loginUrl = "login.php";
$logoutUrl = "logout.php";
if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo "<br/>";
    echo "<a href='$logoutUrl'>Logout</a>";
}
else {
    echo "Guest";
    echo "<br/>";
    echo "<a href='$loginUrl'>Login</a>";
}

 //$user = isset($_SESSION[""]) ? $_SESSION['data'] ;