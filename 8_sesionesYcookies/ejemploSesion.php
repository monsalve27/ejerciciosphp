<?php
session_start(); 
if(!isset($_SESSION['a'])){
    echo "no existe la sesión A<br>";
    $_SESSION['a'] = 0;    
}
if(!isset($_SESSION['b'])){
    echo "no existe la sesión B<br>";
    $_SESSION['b'] = 0;    
}

if(isset($_POST['accion']))
{
    switch($_POST['accion']){
        case "incA":
            $_SESSION['a']++;
            break;
        case  "decA":
            $_SESSION['a']--;
            break;
        case "incB":
            $_SESSION['b']++;
            break;
        case  "decB":
            $_SESSION['b']--;
            break;
        case "cierra":
            session_destroy(); //destruye las variables de sesión
            header("refresh:0;");//refresca la página
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        a = <?= $_SESSION['a'] ?><br>
        b = <?= $_SESSION['b'] ?><br>
        <form action="#" method="post">
            <select name="accion">
                <option value="incA">Incrementa a</option>
                <option value="decA">Decrementa a</option>
                <option value="incB">Incrementa b</option>
                <option value="decB">decrementa b</option>
                <option value="cierra">Cierra sesión</option>
            </select>
            <input type="submit" value="OK">
        </form>
    </body>
</html>