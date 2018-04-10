<!DOCTYPE html>

<?php
    $nome = "NomeDoCookie";
    $valor = 100;
    $expira = time() + (60 * 60 * 24 * 7);

 

    if(isset($_COOKIE['NomeDoCookie'])){
        echo "Você já passou por aqui";
    }else{
        echo "Você nunca passou por aqui";
        setcookie($nome,$valor, $expira);
    }
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cookies</title>
    </head>    
    
    <body>
       
    </body>    
    
    
</html>    