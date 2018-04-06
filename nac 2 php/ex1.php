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
           $imposto = $_GET['imposto'];
            
           $total;
           if($imposto <= 1200){
                $total = $imposto;
           }

           if($imposto > 1200 && $imposto <= 5000 ){
            $total = $imposto + $imposto * 0.1;
           }

           if($imposto > 5000 && $imposto <= 10000 ){
            $total = $imposto + $imposto * 0.15;
           }

           if($imposto > 10000){
            $total = $imposto + $imposto * 0.2;
           }
        

        
           echo "O imposto total é: " . $total;
        
        }
        
        
        
        ?>
        <div class="row">
            <div class="col-md-6">
                    <form action="ex1.php" method="get">
                        <label for="imposto">IMPOSTO</label>
                        <input class="form-control" type="text" placeholder="imposto" name="imposto" required>

                        <input type="submit" class="btn btn-success" style="margin-top:20px;"name="enviar" value="ENVIAR">
                    </form>
                </div>
            </div>
        </body>
</html>    