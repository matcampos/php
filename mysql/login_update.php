<?php include "functions.php";

if(isset($_POST['update'])){
$username = $_POST['username'];
$password = $_POST['password'];
$id = $_POST['id'];

$query = "UPDATE usuario SET username = '$username',password = '$password' where id = $id";

$result = mysqli_query($conection, $query);

if(!$result){
    die("Falha a atualização");
}else{
    echo "Dados atualizados com sucesso";
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
            <form action="login_update.php" method="post">

                <div class="form-group">
                    <label for="username">Usuário: </label>
                    <input type="text" name="username" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="password">Senha: </label>
                    <input type="password" name="password" class="form-control"/>
                </div>


                <div class="form-group">
                   <select name="id">
                  <!-- <option value="1">1</option> -->
                  <?php 
                        mostraDados();
                    ?>
                   </select>
                </div>

                <input type="submit" class="btn btn-primary" name="update" value="ENVIAR">


            </form>
        </div>
    </div>
    
    </body>    
    
    
</html>    