<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Recogida de Datos para Array</title>
    </head>
    <body>
        <?php 
            if(isset($_GET['n'])){
                $n = $_GET['n'];
                $ContadorNumeros = $_GET['ContadorNumeros'];
                $numeroTexto = $_GET['numeroTexto'];
            }
            if(!isset($_GET['n'])){
                $ContadorNumeros = 0;
                $numeroTexto = "";
            }
            //Guardar los números instroducidos
            if($ContadorNumeros == 6){
               $numeroTexto = $numeroTexto . " ". $n;  //añade el último número ingresado
               $numeroTexto = substr($numeroTexto, 2);//quita los dos primeros espacios de la cadena
               echo "<hr>";
               echo $numeroTexto;
               echo "<hr>";
               $numero = explode(" ", $numeroTexto);
               echo "<pre>";
               print_r($numero);
               echo "</pre>";
               echo "Los números introducidos son: <br>";
               foreach($numero as $n){
                echo $n, ", ";
               }
            }
            if(($ContadorNumeros < 6 ) || (!isset($n))){
            ?>
            <form action="#" method="get">
                Introduzca un número: 
                <input type="number" name="n" autofocus>
                <input type="hidden" name="ContadorNumeros" value="<?= ++$ContadorNumeros ?>">
                <input type="hidden" name="numeroTexto" value="<?php if(isset($n)) echo $numeroTexto." ". $n; else echo $numeroTexto . " ";?>">
                <input type="submit" value="OK">
            </form>
            <?php
            }
             ?>    
    </body>    
</html>