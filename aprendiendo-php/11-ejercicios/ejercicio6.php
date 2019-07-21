<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            echo '<table border=1>';
            for($tabla = 1; $tabla<=10; $tabla++)
            {
                echo '<tr>';
                echo '<td>Tabla del '.$tabla.'</td>';
                for($multiplo = 0; $multiplo <=10; $multiplo++)
                {
                    echo '<td>'.$tabla * $multiplo.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>'
        ?>
    </body>
</html>