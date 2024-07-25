<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Numeros Primos</title>
    </head>
    <body>
        <?php 
            include 'matematicas.php';
            if(isset($_POST['numero']))
            $numero = $_POST['numero'];
            if(!isset($numero)){
        ?>
        Introduzca un número para saber si es primo o no.
        <form action="#" method="post">
            <input type="number" name="numero" min="0" autofocus><br>
            <input type="submit" value="Aceptar">
        </form>
        <?php 
            } else {
                if(esPrimo($numero))
                    echo "El $numero es primo."; 
                else   
                    echo  "El $numero no es primo."; 
                echo "<br> <a href='numeroPrimo.php'>RECARGAR PAGINA</a>";
            }
        ?>
    </body>    
</html>