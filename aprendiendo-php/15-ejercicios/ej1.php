<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php      
            $peliculas = array('Thor', 'La era del hielo', 'La naranja mecanica', 'La llamada');
            asort($peliculas);
            foreach ($peliculas as $pelicula) {
                echo $pelicula;
                echo '<br/>';
            }
            echo '<hr/>';
            echo count($peliculas);
        ?>
    </body>
</html>