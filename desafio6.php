<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 6</title>
    </head>    
    
    <body>
        <?php
            // Função que sorteia 6 números
        
        function sorteioMega(){
            // Rodando 6x
          
            $n = array();
            
            while(count($n) < 6){
                $valor = rand(1,60);
                $n[$valor] = $valor; 
            }
            
//            for($i = 0; $i < 6 ; $i++){
//                    // Sorteio de 1 a 60
//                $n[] = rand(1,60);
            // Ordenando de forma crescente
          sort($n);
          echo "Os números sorteados da Mega Sena são: " . implode(' - ', $n);    
        //}
        }
        sorteioMega();
        
        
        ?>
       
    </body>    
    
    
</html>    