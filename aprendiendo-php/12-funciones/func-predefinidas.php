<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            //Debug
            $n = 'aaa';
            var_dump($n);
            
            //Fechas
            echo date('d-m-Y');
            echo '<br/>';
            echo time();
            echo '<br/>';
            
            //Math
            echo sqrt(23.4);
            echo '<br/>';
            echo rand(10,55);
            echo '<br/>';
            echo round(10.43434,3);
            echo '<br/>';
            
            //comprobar tipado is_string($var);
            //Comprobar si existe isset($var);
            //Eliminar variable unset($var);
        ?>
    </body>
</html>