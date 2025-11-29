<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

include "conexion.php";

// Obtener 10 preguntas al azar de la base de datos
$preguntas = $conn->query("SELECT * FROM preguntas ORDER BY RAND() LIMIT 10");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trivia - Juego</title>
    <link rel="stylesheet" href="style.css">
    <script>
        let tiempo = 120; // 2 minutos en segundos
        function actualizarTiempo() {
            let minutos = Math.floor(tiempo / 60);
            let segundos = tiempo % 60;
            document.getElementById('timer').innerText = minutos + ":" + (segundos < 10 ? '0'+segundos : segundos);
            if(tiempo <= 0){
                document.getElementById('triviaForm').submit();
            } else {
                tiempo--;
                setTimeout(actualizarTiempo, 1000);
            }
        }
        window.onload = actualizarTiempo;
    </script>
</head>
<body>
    <h1>Trivia de Programación</h1>
    <p>Tiempo restante: <span id="timer">2:00</span></p>

    <form method="POST" action="resultado.php" id="triviaForm">
        <?php 
        $i = 1;
        while($row = $preguntas->fetch_assoc()): ?>
            <div class="question">
                <p><strong>Pregunta <?php echo $i; ?>:</strong> <?php echo htmlspecialchars($row['pregunta']); ?></p>
                
                <label><input type="radio" name="respuesta<?php echo $row['id']; ?>" value="1" required> <?php echo htmlspecialchars($row['opcion1']); ?></label><br>
                <label><input type="radio" name="respuesta<?php echo $row['id']; ?>" value="2"> <?php echo htmlspecialchars($row['opcion2']); ?></label><br>
                <label><input type="radio" name="respuesta<?php echo $row['id']; ?>" value="3"> <?php echo htmlspecialchars($row['opcion3']); ?></label><br>
                <label><input type="radio" name="respuesta<?php echo $row['id']; ?>" value="4"> <?php echo htmlspecialchars($row['opcion4']); ?></label><br>
            </div>
        <?php $i++; endwhile; ?>
        <button type="submit">Enviar Respuestas</button>
    </form>

    <p style="text-align:center; margin-top:20px;"><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
