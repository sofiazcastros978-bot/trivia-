<?php
$host = "localhost";
$user = "root";
$password = ""; // pon tu contraseña si tiene
$db = "trivia_db";

$conn = new mysqli($host, $user, $password, $db);

if($conn->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}
?>
