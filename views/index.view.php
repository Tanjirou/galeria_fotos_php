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
            <h1 class="titulo">Mi Increíble Galería en PHP y MYSQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <?php foreach($fotos as $foto) :?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id'];?>">
                        <img src="img/<?php echo $foto['imagen'];?>" alt="">
                    </a>
                </div>
            <?php endforeach; ?>
            <div class="paginacion">
                <?php if($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1;?>" class="inzquierda"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
                <?php endif;?>
                <?php if($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1;?>" class="derecha">Página Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif;?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Galería creada por Jaime Lugo</p>
    </footer>

</body>
</html>