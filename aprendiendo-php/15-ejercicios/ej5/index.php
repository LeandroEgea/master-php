<?php require_once 'juegosaccion.php'; ?>
<?php require_once 'juegosaventura.php'; ?>
<?php require_once 'juegosdeportes.php'; ?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            $juegos = array(
                'accion' => $accion, 
                'aventura' => $aventura, 
                'deportes' => $deportes
            );
            var_dump($juegos);
        ?>
    </body>
</html>