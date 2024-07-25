<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sobrecarga</title>
    </head>
    <body>
        <?php 
            include_once "funciones.php";
            //include llama un archivo lo carga en la página pero si contiene errrores, muestra un warning y permite serguir funcionando el domcuento
            //require es similar al include pero en este casi si el archivo contiene errores el programa no funcionará y mostrra´un fatal error en el log
            //include_once y require_once funcionan ingual que lo anteiormente descrito pero evitan la carga del fichero varias veces

            echo opera(2)."<br>";
            echo opera(2,3)."<br>";
            echo opera(2,3,10)."<br>";
            echo opera2(10,20)."<br>";
            echo opera2("melón","sandía")."<br>";
        ?>
    </body>
</html>