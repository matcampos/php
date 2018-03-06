<?php
if(isset($_POST['enviar'])){
    //estabelecer a Conexão com o MySQL

   $connection =  mysqli_connect('localhost','root','fiap','loginapp');
    // if($connection){
    //         echo "eba conectado com sucesso!";
    // }else{
    //     die('moio');
    // }
    if(!$connection){
        die('Moio');
    }

    $name = $_POST['username'];
    $password = $_POST['password'];
    // query para inserir os dados de acordo com os nomes das variáveis
    $query = "INSERT INTO usuario(username, password) VALUES('$name','$password')";

    // função para executar um comando sql
    $result = mysqli_query($connection,$query);

    //validação

    if(!$result){
        die('Moio a inclusão');
    }else{
        echo "Dados inseridos com sucesso!!";
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Criar no banco de dados arquivos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>    
    
    <body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create.php" method="post">

                <div class="form-group">
                    <label for="username">Usuário: </label>
                    <input type="text" name="username" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="password">Senha: </label>
                    <input type="password" name="password" class="form-control"/>
                </div>

                <input type="submit" class="btn btn-primary" name="enviar" value="ENVIAR">


            </form>
        </div>
    </div>
    
    </body>    
    
    
</html>    