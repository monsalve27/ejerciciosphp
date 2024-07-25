<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adivina el número</title>
    </head>
    <body>
        Adivina el número que estoy pensando
        <form action="adivina.php" method="post">
            <input type="hidden" name="numeroIntroducido" value="20">
            <input type="hidden" name="oportunidades" value="5">
            <input type="submit" value="Continuar">
        </form>
    </body>    
</html>