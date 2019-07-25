<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php      
            $peliculas = array('Thor', 'La era del hielo', 'La naranja mecanica', 'La llamada');
            while(count($peliculas) < 12)
            {
                array_push($peliculas, 'aaa');
            }
                        
            foreach ($peliculas as $pelicula) {
                echo $pelicula;
                echo '<br/>';
            }
            echo '<hr/>';
        ?>
    </body>
</html>