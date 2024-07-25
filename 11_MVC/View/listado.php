<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de ofertas - Pizzeria ADSO</title>
        </head>
    <body>
        <h1>Pizzeria ADSO</h1>
        <a href="../Controller/nuevaOferta.php">Agregar Nueva Oferta</a>
        <hr>
        <?php 
            foreach($data['ofertas'] as $oferta){
        ?>        
                <h3><?= $oferta->getTitulo() ?></h3>
                <img src="../View/images/<?= $oferta->getImagen() ?>" width="400"><br>
                <p><?= $oferta->getDescripcion() ?></p><br>
                <a 
                    href="../Controller/borrarOferta.php?id=<?= $oferta->getId() ?>"
                >
                    Borrar Oferta
                </a>
        <?php        
            }
        ?>
    </body>
<html>