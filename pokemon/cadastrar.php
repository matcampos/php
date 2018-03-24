
<?php 
include "funções.php";
criar();
?>
<!DOCTYPE html>
<html lang="en">
<?php 
include "head.php";
?>

<body>

    <div class="col-md-6">

    <form action="cadastrar.php" method="post">
            <div class="form-group">
              <input type="text"class="form-control" name="name">
            </div>
   
            <div class="form-group">
            <input type="text"class="form-control" name="type">
          </div>
          <div class="form-group">
          <input type="number"class="form-control" name="hp">
        </div>

        <div class="form-group">
              <input type="submit"class="form-control" name="enviar" value ="ENVIAR">
            </div>
    </div>
    
    </form>
    </div>
</body>
</html>