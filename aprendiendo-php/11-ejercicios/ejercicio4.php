<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
        if(isset($_GET['a']) && isset($_GET['b']))
        {
            $a = $_GET['a'];
            $b = $_GET['b'];
            echo '<p>'.($a * $b).'</p>';
            echo '<p>'.($a / $b).'</p>';
        }
        else{
            //var_dump($_GET);
            echo 'dame los valores';
        }
        ?>
    </body>
</html>