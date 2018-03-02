<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funções com Parâmetro</title>
    </head>    
    
    <body>
        <?php
            function somar($x, $y){
                return $x + $y;
            }
            echo somar(12, 3);
            echo "<br>";
        
        
            function multiplicar($x, $y, $z){
                return $x * $y * $z;
            }
            echo multiplicar(4, 6, 9);
        
        ?>
       
    </body>    
    
    
</html>    