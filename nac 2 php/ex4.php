<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        </head>
        <body class="container">
        <?php
        
        if(isset($_GET['enviar'])){

            echo "A alternativa correta é a c) connection = mysqli_connect('localhost', 'root', ' ', 'loginapp'); ";
        
        }
        
        
        
        ?>
        <div class="row">
            <div class="col-md-6">
                    <form action="ex4.php" method="get">
                        <label for="enviar">Quilometros</label>
                        <input type="submit" class="btn btn-success" style="margin-top:20px;"name="enviar" value="IMPRIMIR ALTERNATIVA">
                    </form>
                </div>
            </div>
        </body>
</html>    