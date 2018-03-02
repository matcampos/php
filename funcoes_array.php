<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Funções de Array</title>
    </head>    
    
    <body>
       <?php
            $listaNumeros = array(343, 34, 323, 23, 54, 232, 453);
        
        // Função que exibe o maior número do array:
        echo max($listaNumeros);
        echo "<br>";
        
        // Função que exibe o menor número do array:
        echo min($listaNumeros);
        echo "<br>";
        
        // Ordem Crescente
        sort($listaNumeros);
        echo "<br>";
        // Exibo o meu array (Função de imprimir)
        print_r($listaNumeros);
        echo "<br>";
        
        $dados = array('Gustavo', 'Torrente', '954009234');
        $implode = implode(' , ', $dados);
        
        echo $implode;
        
        ?>
    </body>    
    
    
</html>    