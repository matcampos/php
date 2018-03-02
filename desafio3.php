<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>    
    
    <body>
       <?php
            //Notas
        $nota_nac = 7;
        $nota_ps =  1.2;  
        $nota_am =  8.7;
            
            //Pesos
        $peso_nac = 0.2; 
        $peso_ps =  0.5; 
        $peso_am =  0.3;
        
            //Calculo da Média
        $nota_final = ($nota_nac * $peso_nac) + ($nota_ps * $peso_ps) + ($nota_am * $peso_am);
               
            //Faltas e Aulas
        $total_faltas = 13; 
        $total_aulas =  70;  
        $porcentagem_permitida = 0.2;
            //Cálculo das Faltas
        $faltas_permitidas = $total_aulas * $porcentagem_permitida;
 
        if($nota_final >=6 && $total_faltas <= $faltas_permitidas){
            echo "Sua nota final foi $nota_final. Parabéns você foi aprovado!!!";
        } elseif($nota_final >=6 && $total_faltas > $faltas_permitidas){
            echo "Sua nota foi positiva, mas você foi reprovado por faltas #chateado";
        } else{
            echo "Sua nota foi $nota_final, você foi reprovado pela sua nota! ";
        }
        
        
        ?>
    </body>    
    
    
</html>    