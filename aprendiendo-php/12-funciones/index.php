<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            $p = 'patata';
            function imprime($numero, $h1 = false, $patata = false)
            {
                global $p;
                if($h1) {
                    echo '<h1>';
                }
                if ($patata) {
                    echo "<p>$p</p>";
                }
                echo "<p>$numero</p>";
                if($h1) {
                    echo '</h1>';
                }
            }
            imprime(1);
            imprime(2,true);
            imprime(3,false);
            imprime(4,0);
            imprime(5,true,true);
        ?>
    </body>
</html>