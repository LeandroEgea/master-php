<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            $peliculas = array('Thor', 3, 'La naranja mecanica');
            var_dump($peliculas);
            var_dump($peliculas[2]);
            foreach ($peliculas as $pelicula) {
                echo $pelicula.'<br/>';                
            }
            echo '<hr/>';
            //-----------------------------------------------------
            $volverAlFuturo = array(
                'nombre' => 'Back To The Future',
                'anio' => 1981,
                'protagonista' => 'Marty',
                'a',
                1 => 'b'
            );
            var_dump($volverAlFuturo['anio']);
            //var_dump($_GET);
            foreach ($volverAlFuturo as $key => $value) {
                echo 'Key = '.$key.' - Value = '.$value.'<br/>'; 
            }
            echo '<hr/>';
            //-----------------------------------------------------
            $contactos = array(
                array(
                    7 => 'a',
                    8 => 'b'
                ),               
                array(
                    7 => 'c',
                    8 => 'd'
                ),
                array(
                    7 => 'e',
                    8 => 'f'
                )
            );
            echo $contactos[2][8];            
        ?>
    </body>
</html>