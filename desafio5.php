<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 5</title>
    </head>    
    
    <body>
    <?php    
        
       function converteTemperatura($c){
            return ($c * 1.8) + 32;
        }
        echo "A temperatura em Graus Fahrenheit é: " . converteTemperatura(2) . "F";
    
    ?>    
    </body>    
    
    
</html>    