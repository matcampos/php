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

          for($i = 1;$i < 8;$i++){

            for($y = 1;$y < 11;$y++){
                echo $i . "x" . $y . "=" . $i * $y;       
                echo "<br>";
                }

                echo "<br>";

          }
        
        
        }
        
        
        
        ?>
        <div class="row">
            <div class="col-md-6">
                    <form action="ex2.php" method="get">
                        <label for="enviar">Tabuadas</label>
                        <input type="submit" class="btn btn-success" style="margin-top:20px;"name="enviar" value="IMPRIMIR TABUADAS">
                    </form>
                </div>
            </div>
        </body>
</html>    