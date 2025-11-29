<?php
session_start();
if(isset($_SESSION['user_id'])){
    header("Location: trivia.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trivia Web - Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {font-family: Arial; background:#f3e8ff; display:flex; justify-content:center; align-items:center; height:100vh;}
        .container {background:white; padding:30px; border-radius:10px; box-shadow:0 5px 20px rgba(0,0,0,0.2); width:350px; text-align:center;}
        input {width:100%; padding:10px; margin:10px 0; border-radius:5px; border:1px solid #ccc;}
        button {width:100%; padding:10px; background:#7b2ff7; color:white; border:none; border-radius:5px; cursor:pointer;}
        button:hover {background:#6a26d9;}
        #registerForm {display:none;}
        .toggle-register {margin-top:15px; color:#7b2ff7; cursor:pointer;}
    </style>
    <script>
        function showRegister(){document.getElementById('registerForm').style.display='block'; document.getElementById('loginForm').style.display='none';}
        function showLogin(){document.getElementById('registerForm').style.display='none'; document.getElementById('loginForm').style.display='block';}
    </script>
</head>
<body>
    <div class="container">
        <!-- Login -->
        <form id="loginForm" action="login.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Entrar</button>
            <p class="toggle-register" onclick="showRegister()">¿No tienes cuenta? Registrarse</p>
        </form>

        <!-- Registro -->
        <form id="registerForm" action="register.php" method="POST">
            <h2>Registrarse</h2>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Contraseña" required>
            <button type="submit">Registrar</button>
            <p class="toggle-register" onclick="showLogin()">Ya tienes cuenta? Iniciar sesión</p>
        </form>
    </div>
</body>
</html>
