<?php 
include "funçõesEX5.php";
deletar();
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
        <p>Selecione o id que deseja deletar</p>
        <form action="ex5Deletar.php" method="post">

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
                <input type="submit"class="form-control btn btn-success" style="margin-top:10px;" name="deletar" value ="ENVIAR">
                </div>
        </div>
        
        </form>
    </div>
    <?php 

include "links.php";

?>
</body>
</html>