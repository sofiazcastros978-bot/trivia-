<?php
include "conexion.php";

if(isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['password'])){
    $usuario = trim($_POST['usuario']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        echo "<p style='color:red;text-align:center;'>El email ya está registrado.</p>";
    } else {
        $stmt_insert = $conn->prepare("INSERT INTO usuarios (usuario,email,password) VALUES (?,?,?)");
        $stmt_insert->bind_param("sss",$usuario,$email,$password);
        if($stmt_insert->execute()){
            echo "<p style='color:green;text-align:center;'>Registro exitoso. <a href='index.php'>Iniciar sesión</a></p>";
        } else {
            echo "<p style='color:red;text-align:center;'>Error: ".$conn->error."</p>";
        }
        $stmt_insert->close();
    }
    $stmt->close();
}
?>
