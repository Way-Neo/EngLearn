<?php 

$server = "localhost";
$user = "root";
$password = "";
$database = "englearn";

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) { // If Check Connection
    die("<script>alert('Connection Failed.')</script>");
}

?>