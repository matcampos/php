<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Variável Global e Local</title>
    </head>    
    
    <body>
       <?php
            $x = "fora";
        
            function teste(){
                global $x;
                $x = "dentro";
            }
        
            echo $x;
            echo "<br>";
        
            teste();
            echo $x;
        
        ?>
    </body>    
    
    
</html>    