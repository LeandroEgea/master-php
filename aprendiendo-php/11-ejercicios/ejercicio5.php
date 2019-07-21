<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
        if(isset($_GET['a']) && isset($_GET['b']) && $_GET['a'] < $_GET['b'])
        { 
            for($i = $_GET['a']; $i <= $_GET['b']; $i++)
            {
                echo "<p>$i</p>";
            }
        }
        else{
            //var_dump($_GET);
            echo 'dame los valores';
        }
        ?>
    </body>
</html>