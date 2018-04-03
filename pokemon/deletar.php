
<?php 

include "funções.php";
deletar();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "head.php";
?>

<body>

    <div class="col-md-6"  style="margin:auto">
    <p>Selecione o id do pokemon que deseja deletar</p>
    <form action="deletar.php" method="post">

           <select class="form-control" name="id" id="">
       
    <?php
        ExibirDados();
    ?>

           </select>

        <div class="form-group" style="margin-top:10px;">
              <input type="submit"class="form-control btn btn-success" name="deletar" value ="ENVIAR">
            </div>
    </div>
    
    </form>
    </div>
    <?php 

include "links.php";

?>
</body>
</html>