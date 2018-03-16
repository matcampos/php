<?php
            $conection = MYSQLI_CONNECT('localhost','root','fiap','loginapp');
            if(!$conection){
                echo "Moio" . mysqli_error($conection);
            }

            $query = "SELECT * from usuario";

            $result = mysqli_query($conection, $query);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>    
    
    <body>
                <div class="container">
                        <div class="col-sm-6"></div>
                            <?php
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<pre>";
                                print_r($row['username']);
                                // echo "<br>";
                                echo "</pre>";
                                }
                            ?>
                        </div>
    </body>    
    
    
</html>    