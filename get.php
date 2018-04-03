<?php
  print_r($_GET);

?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - get</title>
    </head>    
    
    <body>
        <?php
        $id = 10;
        ?>
        <a href="get.php?id=<?php
        echo $id;
        ?>">Clique aqui</a>
       
    </body>    
    
    
</html>    