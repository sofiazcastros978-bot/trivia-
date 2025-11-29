<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
    exit();
}

include "conexion.php";

$usuario_id = $_SESSION['user_id'];
$puntaje = 0;
$detalles = [];

// Recorremos todas las respuestas enviadas
foreach($_POST as $pregunta_key => $respuesta_usuario){
    $pregunta_id = str_replace("respuesta", "", $pregunta_key);
    $pregunta = $conn->query("SELECT * FROM preguntas WHERE id=$pregunta_id")->fetch_assoc();

    $correcta = $pregunta['correcta'];
    if($respuesta_usuario == $correcta){
        $puntaje++;
    }

    $detalles[] = [
        'pregunta' => $pregunta['pregunta'],
        'opciones' => [
            $pregunta['opcion1'],
            $pregunta['opcion2'],
            $pregunta['opcion3'],
            $pregunta['opcion4']
        ],
        'correcta' => $correcta,
        'seleccionada' => $respuesta_usuario
    ];
}

// Guardamos el puntaje en la base de datos
$conn->query("INSERT INTO puntajes (usuario_id, puntaje) VALUES ($usuario_id, $puntaje)");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado Trivia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>¡Resultado de la Trivia!</h1>
    <p class="result">Tu puntaje: <?php echo $puntaje; ?> / <?php echo count($detalles); ?></p>

    <?php foreach($detalles as $i => $d): ?>
        <div class="question">
            <p><strong>Pregunta <?php echo $i+1; ?>:</strong> <?php echo htmlspecialchars($d['pregunta']); ?></p>
            <?php foreach($d['opciones'] as $index => $opcion): ?>
                <?php 
                    $num = $index + 1;
                    $clase = '';
                    if($num == $d['correcta']) $clase = 'correct';
                    if($num == $d['seleccionada'] && $num != $d['correcta']) $clase = 'wrong';
                ?>
                <p class="<?php echo $clase; ?>">
                    <?php echo htmlspecialchars($opcion); ?>
                    <?php if($num == $d['correcta']) echo " ✅"; ?>
                    <?php if($num == $d['seleccionada'] && $num != $d['correcta']) echo " ❌"; ?>
                </p>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    <p style="text-align:center; margin-top:20px;">
        <a href="trivia.php">Jugar de nuevo</a> | 
        <a href="logout.php">Cerrar sesión</a>
    </p>
</body>
</html>
