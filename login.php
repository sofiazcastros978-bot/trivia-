<?php
session_start();
include "conexion.php";

if(isset($_POST['usuario']) && isset($_POST['password'])){
    $usuario = trim($_POST['usuario']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario=?");
    $stmt->bind_param("s",$usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows === 1){
        $row = $result->fetch_assoc();
        if(password_verify($password,$row['password'])){
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['usuario'] = $row['usuario'];
            header("Location: trivia.php");
            exit();
        } else {
            echo "<p style='color:red;text-align:center;'>Contraseña incorrecta.</p>";
        }
    } else {
        echo "<p style='color:red;text-align:center;'>Usuario no encontrado.</p>";
    }
}
?>
