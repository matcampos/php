
<?php 

include "funções.php";
alterar();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "head.php";
?>

<body>

    <div class="col-md-6">
    <p>Selecione o id do poquemon que deseja alterar</p>
    <form action="alterar.php" method="post">

        <div class="form-group">
            <input type="text"class="form-control" name="name">
        </div>
   
        <div class="form-group">
            <input type="text"class="form-control" name="type">
        </div>
          <div class="form-group">
          <input type="number"class="form-control" name="hp">
        </div>

           <select name="id" id="">
       
    <?php
        ExibirDados();
    ?>

           </select>

        <div class="form-group">
              <input type="submit"class="form-control" name="alterar" value ="ENVIAR">
            </div>
    </div>
    
    </form>
    </div>
</body>
</html>