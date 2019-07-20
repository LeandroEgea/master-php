<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <h1>Hello World HTML</h1>
        <?php
            // echos random /**/
        $variable1 = 'hola';
        $variable2 = 2;
        $variable3 = true;
            echo '<h2>patata</h2>';
            echo '<ul>'
                    .'<li>1</li>'
                    .'<li>2</li>'
                .'</ul>';
        //var_dump($variable1);
        ?>
        <?='<h2>'.$variable3.'</h2>'?>
        <?='<h2>'.gettype($variable3).'</h2>'?>
        
        <?php
            //constantes
            define('nombre', 'Lean');
            
            echo '<h3>'.nombre.'</h3>';
            
            //predefinidas __XXX__  o  PHP_XXX
            echo PHP_VERSION;
            echo '</br>';
            echo __LINE__;
        ?>
        
    </body>
</html>

