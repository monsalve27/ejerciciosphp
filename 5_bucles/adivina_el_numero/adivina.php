<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Adivina el número</title>
    </head>
    <body>
        <?php 
            $oportunidades = $_POST['oportunidades'];
            $numeroIntroducido = $_POST['numeroIntroducido'];
            $numeroSecreto = 17;
            if($numeroIntroducido == $numeroSecreto)
                echo "Felicitaciones, has acertado el número";
            else{
                if($oportunidades == 0)
                    echo "Lo siento , has agotado todas tus oportunidades. Has perdido!!!!";
                else{
                    if($numeroIntroducido != $numeroSecreto){
                        if($numeroSecreto > $numeroIntroducido)
                            echo "El número que estoy pensando es mayor que el número que has introducido.<br>";
                        else
                            echo "El número que estoy pensando es menor que el número que has introducido <br>";
                    }                        
                    ?>
                        Te quedan <?= $oportunidades-- ?> oportunidades para adivinar el número. <br>
                        Introduce un número del 0 al 20 <br>
                        <form action="adivina.php" method="post">
                            <input type="number" name="numeroIntroducido">
                            <input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
                            <input type="submit" value="Continuar">
                        </form>
                    <?php
                }       
            }
        ?>        
    </body>    
</html>