<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Switch</title>
    </head>    
    
    <body>
       <?php
            $partido = 66;
        
            switch($partido){
                case 45:
                echo "Você votou no PSDB";
                break;    
                case 13:
                echo "Você votou no PT"; 
                break;       
                case 46:    
                echo "Você votou no XXX";
                break;    
                    
                default:
                echo "Voto inválido";
                break;    
            }
        
        ?>
    </body>    
    
    
</html>    