
<?php 
include "funções.php";
criar();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "head.php";
include "phpScript.php";
?>

<body >

    <div class="col-md-6" style="margin:auto;margin: auto;
    border: 2px solid #7b797947;
    border-radius: 5px;" >

    <form action="cadastrar.php" method="post">
            <div class="form-group">
            <label for="">Nome</label>
              <input type="text"class="form-control" name="name">
            </div>
   
            <div class="form-group">
            <label for="">Tipo</label>
            <input type="text"class="form-control" name="type">
          </div>
          <div class="form-group">
          <label for="">Hp</label>
          <div class="slidecontainer">
            <input type="range" min="1" max="100" value="50" class="slider" name="hp" id="hp">
            <p>Value: <span id="demo"></span></p>
          </div>
        </div>

        <div class="form-group">
              <input type="submit"class="form-control btn btn-success" style="margin-top:10px;" name="enviar" value ="ENVIAR">
            </div>
    </div>
    
    </form>
    </div>
    <?php 
include "footer.php";
include "links.php";

?>
</body>
</html>