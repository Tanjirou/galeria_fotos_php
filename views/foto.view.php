<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/05b6df59fc.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galería</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Foto:<?php if(!empty($foto['titulo']))
            {echo $foto['titulo'];} else{echo $foto['imagen'];}?></h1>
        </div>
    </header>

    <div class="contendor">
        <div class="foto">
            <img src="img/<?php echo $foto['imagen'];?>" alt="Foto cargada">
            <p class="texto">
                <?php echo $foto['texto'] ?>
            </p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-alt-left"></i> Regresar</a>
        </div>
    </div>

    <footer>
        <p class="copyright">Galería creada por Jaime Lugo</p>
    </footer>

</body>
</html>