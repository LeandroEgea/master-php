<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            $pais = 'Suiza';
            $continente = 'Europa';
            echo "<p>$pais pertenece a $continente <p>";
            echo gettype($continente);
            var_dump($continente);
        ?>
    </body>
</html>