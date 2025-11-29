<?php
include "conexion.php";

// Usamos comillas simples externas y escapamos comillas dobles internas
$sql = '
INSERT INTO preguntas (tema, pregunta, opcion1, opcion2, opcion3, opcion4, correcta) VALUES
-- Bloque 1
("Programación", "¿Qué significa HTML?", "HyperText Markup Language", "HighText Machine Language", "HyperTabular Markup Language", "Hyperlink Text Markup Language", 1),
("Programación", "¿Cuál de estos es un lenguaje de programación?", "HTML", "CSS", "JavaScript", "Photoshop", 3),
("Elementos esenciales", "¿Qué etiqueta HTML define un párrafo?", "<p>", "<h1>", "<div>", "<span>", 1),
("HTML/CSS/PHP/JS", "¿Cuál de estos se usa para dar estilo a una página web?", "HTML", "CSS", "PHP", "SQL", 2),
("Estructura básica", "Etiqueta que define el contenido principal de la página:", "<main>", "<section>", "<header>", "<footer>", 1),
("Etiquetas HTML", "¿Qué etiqueta se usa para crear un enlace?", "<a>", "<link>", "<href>", "<nav>", 1),
("Bootstrap", "¿Cuál clase de Bootstrap hace que un botón sea azul?", "btn btn-primary", "btn btn-danger", "btn btn-success", "btn btn-warning", 1),
("Base de datos", "¿Qué comando SQL crea una base de datos?", "CREATE DATABASE", "CREATE TABLE", "INSERT DATABASE", "NEW DATABASE", 1),
("Lenguajes de programación", "Python es un lenguaje de tipo:", "Compilado", "Interpretado", "Ensamblador", "Declarativo", 2),
("Programación", "JavaScript se ejecuta principalmente en:", "Servidor", "Cliente", "Base de datos", "Ninguno", 2),
("Elementos esenciales", "¿Qué etiqueta HTML define un encabezado de nivel 2?", "<h2>", "<h1>", "<header>", "<h3>", 1),
("HTML/CSS/PHP/JS", "PHP se usa principalmente para:", "Frontend", "Backend", "Diseño", "Estilos", 2),
("Estructura básica", "Etiqueta que contiene la cabecera de un documento HTML:", "<header>", "<head>", "<h1>", "<body>", 2),
("Etiquetas HTML", "¿Cuál etiqueta se usa para insertar una imagen?", "<img>", "<picture>", "<figure>", "<image>", 1),
("Bootstrap", "Clase que crea un contenedor fluido en Bootstrap:", "container-fluid", "container", "row", "col", 1),
("Base de datos", "Comando SQL para insertar datos:", "INSERT INTO", "UPDATE SET", "SELECT * FROM", "CREATE TABLE", 1),
("Lenguajes de programación", "Lenguaje utilizado para desarrollo de aplicaciones móviles iOS:", "Java", "Swift", "PHP", "Python", 2),
("Programación", "¿Qué operador se usa para concatenar strings en PHP?", ".", "+", "&", "||", 1),
("HTML/CSS/PHP/JS", "Etiqueta que define una lista no ordenada:", "<ul>", "<ol>", "<li>", "<dl>", 1),
("Elementos esenciales", "Etiqueta que define el pie de página de una web:", "<footer>", "<foot>", "<bottom>", "<section>", 1),

-- Bloque 2
("Programación", "¿Qué es una variable en programación?", "Un contenedor de datos", "Una función", "Un tipo de error", "Un lenguaje", 1),
("Programación", "¿Qué significa API?", "Application Programming Interface", "Application Programming Internet", "Advanced Program Interface", "Application Public Interface", 1),
("Elementos esenciales", "¿Qué etiqueta define un botón en HTML?", "<button>", "<input>", "<form>", "<div>", 1),
("HTML/CSS/PHP/JS", "JavaScript se utiliza principalmente para:", "Backend", "Frontend interactivo", "Base de datos", "Diseño gráfico", 2),
("Estructura básica", "Etiqueta que engloba el contenido de la página visible:", "<body>", "<html>", "<head>", "<section>", 1),
("Etiquetas HTML", "¿Qué etiqueta HTML define un título de página?", "<title>", "<h1>", "<head>", "<header>", 1),
("Bootstrap", "Clase Bootstrap para columnas en un grid responsivo:", "col", "row", "container", "card", 1),
("Base de datos", "Comando SQL para actualizar un registro:", "UPDATE", "INSERT", "DELETE", "CREATE", 1),
("Lenguajes de programación", "Cuál de estos no es un lenguaje de programación:", "Python", "HTML", "Java", "C++", 2),
("Programación", "¿Qué es un ciclo \"for\"?", "Una estructura condicional", "Una función", "Una estructura repetitiva", "Un error de sintaxis", 3),
("Elementos esenciales", "Etiqueta HTML para un enlace que abre en nueva pestaña:", "<a target=\"_blank\">", "<a newtab>", "<link target=\"_new\">", "<href target=\"_blank\">", 1),
("HTML/CSS/PHP/JS", "PHP se incrusta principalmente en:", "HTML", "CSS", "JavaScript", "SQL", 1),
("Estructura básica", "Etiqueta que contiene metadatos de la página:", "<head>", "<body>", "<header>", "<main>", 1),
("Etiquetas HTML", "Etiqueta para definir una tabla:", "<table>", "<tr>", "<td>", "<th>", 1),
("Bootstrap", "Clase para un contenedor fluido en Bootstrap:", "container-fluid", "container", "row", "col", 1),
("Base de datos", "Comando SQL para eliminar una tabla:", "DROP TABLE", "DELETE TABLE", "REMOVE TABLE", "ERASE TABLE", 1),
("Lenguajes de programación", "Lenguaje usado para desarrollo de aplicaciones Android nativo:", "Java", "Swift", "Python", "PHP", 1),
("Programación", "¿Qué es un comentario en código?", "Un error", "Texto ignorado por el compilador/interprete", "Una variable", "Un ciclo", 2),
("HTML/CSS/PHP/JS", "Etiqueta para insertar un script de JavaScript:", "<script>", "<js>", "<javascript>", "<code>", 1),
("Elementos esenciales", "Etiqueta que define un formulario en HTML:", "<form>", "<input>", "<button>", "<fieldset>", 1),

-- Bloque 3
("Programación", "¿Qué es un array o arreglo en programación?", "Una colección de datos ordenados", "Una función", "Un error de código", "Una variable individual", 1),
("Programación", "¿Qué significa IDE en programación?", "Integrated Development Environment", "Internal Debugging Engine", "Internet Development Example", "Input Data Environment", 1),
("Elementos esenciales", "¿Qué etiqueta HTML se utiliza para insertar un video?", "<video>", "<media>", "<movie>", "<iframe>", 1),
("HTML/CSS/PHP/JS", "¿Qué propiedad de CSS cambia el color del texto?", "color", "background", "font-size", "text-align", 1),
("Estructura básica", "Etiqueta que engloba el contenido de la página visible:", "<body>", "<html>", "<head>", "<section>", 1),
("Etiquetas HTML", "Etiqueta HTML que define un título de página:", "<title>", "<h1>", "<head>", "<header>", 1),
("Bootstrap", "Clase para crear un botón verde en Bootstrap:", "btn btn-success", "btn btn-primary", "btn btn-danger", "btn btn-warning", 1),
("Base de datos", "Comando SQL para consultar datos de una tabla:", "SELECT * FROM", "SHOW TABLE", "GET FROM", "FETCH *", 1),
("Lenguajes de programación", "Lenguaje principal para aplicaciones iOS nativas:", "Java", "Swift", "Kotlin", "PHP", 2),
("Programación", "¿Qué es un ciclo while?", "Una estructura que se repite mientras la condición sea verdadera", "Una función", "Un array", "Un error", 1),
("HTML/CSS/PHP/JS", "Etiqueta HTML que carga un archivo CSS externo:", "<link>", "<style>", "<css>", "<script>", 1),
("Elementos esenciales", "Etiqueta HTML para crear un campo de formulario de contraseña:", "<input type=\"password\">", "<input type=\"text\">", "<input type=\"hidden\">", "<input type=\"email\">", 1),
("Programación", "¿Qué es una función recursiva?", "Una función que se llama a sí misma", "Una función sin parámetros", "Una variable global", "Un ciclo infinito", 1),
("Programación", "¿Qué significa SQL?", "Structured Query Language", "Simple Query Language", "Standard Question Language", "Structured Question List", 1),
("Lenguajes de programación", "Lenguaje más usado en desarrollo web frontend:", "Python", "PHP", "JavaScript", "Java", 3),
("HTML/CSS/PHP/JS", "Etiqueta HTML para definir un comentario:", "<!-- comentario -->", "<comment>", "<!-- -->", "<cmt>", 1),
("Elementos esenciales", "Etiqueta HTML que define un artículo independiente:", "<article>", "<section>", "<div>", "<aside>", 1),
("Bootstrap", "Clase para agregar margen superior en Bootstrap:", "mt-3", "mb-3", "pt-3", "pb-3", 1),
("Base de datos", "Comando SQL para modificar la estructura de una tabla:", "ALTER TABLE", "UPDATE TABLE", "MODIFY TABLE", "CHANGE TABLE", 1),
("Programación", "¿Qué es una condición if?", "Evalúa si una expresión es verdadera o falsa", "Crea un ciclo", "Define una función", "Inserta un valor en un array", 1);
';

if($conn->multi_query($sql)){
    echo "Las 60 preguntas se cargaron correctamente.";
} else {
    echo "Error al cargar preguntas: " . $conn->error;
}
?>
