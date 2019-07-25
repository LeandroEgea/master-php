<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Master PHP</title>
    </head>
    <body>
        <?php
            $arr = array('a', 'b');
            $str = 'aaa';
            $int = 3;
            $bool = true;
            $e = null;
            
            tipo($arr);
            tipo($str);
            tipo($int);
            tipo($bool);
            tipo($e);
            
            function tipo($p) {
                if(is_array($p)){
                    echo 'array<br/>';
                }
                else if(is_string($p)){
                    echo 'array<br/>';
                }
                else if(is_int($p)){
                    echo 'array<br/>';
                }
                else if(is_bool($p)){
                    echo 'array<br/>';
                }
                else {
                    echo 'idk<br/>';
                }
            }
        ?>
    </body>
</html>