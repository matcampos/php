<?php 
include "funçõesEX5.php";
alterar();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "headEX5.php";
?>
<body class="banner">

    <div class="col-md-6 color"       
    style="
    margin:auto;
    margin: auto;
    border: 2px solid #7b797947;
    border-radius: 5px;">
    <p>Selecione o id que deseja alterar</p>
    <form action="ex5Alterar.php" method="post">

        <div class="form-group">
        <label for="">Nome</label>
            <input type="text"class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="">RG</label>
            <input type="text"class="form-control" name="rg">
          </div>
          <div class="form-group">
          <label for="">Telefone</label>
          <input type="number" class="form-control" name="phone">
        </div>
        <div class="form-group">
          <label for="">email</label>
          <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
        <label for="">ID</label>
           <select class="form-control" name="id" id="">
                    <?php
                        exibirDadosAlter();
                    ?>
            </select>
        </div>
        </div>
     

        <div class="form-group">
              <input type="submit"class="form-control btn btn-success" style="margin-top:10px;" name="alterar" value ="ENVIAR">
            </div>
    </div>
    
    </form>
    </div>
    <?php 

include "links.php";

?>
</body>
</html>