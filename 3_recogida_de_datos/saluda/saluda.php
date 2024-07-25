<?php 
if(isset($_GET['nombre']))
    echo "El nombre es: ", $_GET['nombre'];
else
    echo "No llegó!!!";
$nombre = $_GET['nombre'] ?? 'nada'; 
echo "<br>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        hola <?= $nombre ?> que tengas un bonito día.
        <br>
        <a href="../saluda">Regresar</a>
    </body>
</html>  