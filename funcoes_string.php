<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funções de String</title>
    </head>    
    
    <body>
        <?php
            $string = "Ninguem faltou hoje";
            //Função que conta caracteres
            echo strlen($string);
            echo "<br>";
        
            echo strtoupper($string);
            echo "<br>";
            echo strtolower($string);
            echo "<br>";
            
            if(!strstr($string, '!')){
                echo "Não tem ponto de exclamação";
            } else {
                echo "Tem ponto ué!";
            }
        
        ?>
       
    </body>    
    
    
</html>    