<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Foreach</title>
    </head>    
    
    <body>
       <?php
        
        $numeros = array(345, 397, 676, 2657);
        
        foreach($numeros as $numero){
            echo $numero . "<br>";    
        }
        
        ?>
    </body>    
    
    
</html>    