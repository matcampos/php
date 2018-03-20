<?php include "functions.php";

    delete();
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
        <div class="col-sm-6" style="margin-top:50px;">
            <form action="login_delete.php" method="post">
            <h4>Selecione o 
            <span 
            style="color:#fff;
            background:#007bff;
            border-radius:3px;">id</span> do objeto que deseja deletar</h4>

                <div class="form-group">
                   <select name="id" class="col-md-3">
                  <!-- <option value="1">1</option> -->
                  <?php 
                        mostraDados();
                    ?>
                   </select>
                </div>
                    <input type="submit" class="btn btn-danger" name="delete" value="deletar">

            </form>
        </div>
    </div>
    
    </body>    
    
    
</html>    