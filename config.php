<?php 

$server = "localhost";
$user = "id18017136_mediplus2798";
$pass = "root";
$database = "id18017136_mediplus";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>