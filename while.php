<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - WHILE</title>
    </head>    
    
    <body>
       <?php
        //Loop Infinito
//        while(4 < 10){
//            echo "Boa noite!";
//        }
        
        $contador = 0;
        while($contador < 10){
            echo "Boa noite!" . "<br>"; 
            //$contador = $contador + 1;
            $contador++;
        }
        
        ?>
    </body>    
    
    
</html>    