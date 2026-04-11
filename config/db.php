<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "jomrecipe";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if(!$conn) {
    die("Connection Failed");
}
?>