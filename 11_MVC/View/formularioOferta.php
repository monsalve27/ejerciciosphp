<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../Controller/grabarOferta.php" enctype="multipart/form-data" method="post">
            <label for="titulo"> Titulo: 
                <input type="text" size="40" name="titulo" required>
            </label><br>
            <label for="imagen"> Imágen: 
                <input type="file" id="file" name="imagen" required>
            </label><br>
            <label for="descripcion"> Descripcion: 
                <textarea cols="60" row="6" name="descripcion" required>
                </textarea>
            </label><br>
            <input type="submit" value="Aceptar">
        </form>
    </body>
</html>