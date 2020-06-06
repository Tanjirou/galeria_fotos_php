<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/05b6df59fc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Subir Foto</h1>
        </div>
    </header>

    <div class="contendor">
        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <label for="foto">Selecciona tu foto</label>
            <input type="file" name="foto" id="foto">

            <label for="titulo"> Titulo de la foto</label>
            <input type="text" id="titulo" name="titulo">

            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="Ingresa tu texto"></textarea>

            <?php if(isset($error)): ?>
                <p class="error"><?php echo $error;?></p>
            <?php endif; ?>
            <input type="submit" class="submit" value="Subir foto">
        </form>
    </div>

    <footer>
        <p class="copyright">Galería creada por Jaime Lugo</p>
    </footer>

</body>
</html>