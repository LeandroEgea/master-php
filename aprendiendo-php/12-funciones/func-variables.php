<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            function sayHello()
            {
                return 'ey, que pasa';
            }
            $funcion = 'Hello';
            $funcion2 = 'say'.$funcion;
            echo $funcion2();
        ?>
    </body>
</html>