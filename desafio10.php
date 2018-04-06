<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="container">
<?php

if(isset($_GET['enviar'])){
   $nome = $_GET['nome'];
   $disciplina = $_GET['disciplina'];
   $nac = $_GET['nac'];
   $ps = $_GET['ps'];
   $am = $_GET['am'];

    $calcNac = $nac * 0.2;
    $calcAm = $am * 0.3;
    $calcPs = $ps * 0.5;

    $total  = $calcNac + $calcPs + $calcAm;

   echo "nome: " . $nome . "<br>" . "disciplina: " . $disciplina . "<br>" . "nac: " . $nac . "<br>" . "PS: " . $ps . "<br>" . "AM: " . $am . "<br>" . "Média: " . $total;

}



?>
<div class="row">
    <div class="col-md-6">
            <form action="desafio10.php" method="get">
                <label for="nome">NOME</label>
                <input class="form-control" type="text" placeholder="nome" name="nome" required>
        
                <label for="Disciplina">DISCIPLINA</label>
                <input class="form-control" type="text" placeholder="disciplina" name="disciplina" required>
          
                <label for="nac">NAC</label>
                <input class="form-control" type="text" placeholder="nac" name="nac" required>
           
                <label for="PS">PS</label>
                <input class="form-control" type="text" placeholder="ps" name="ps" required>
          
                <label for="AM">AM</label>
                <input class="form-control" type="text" placeholder="am" name="am" required>
       
                <input type="submit" class="btn btn-success" style="margin-top:20px;"name="enviar" value="ENVIAR">
            
            </form>
        </div>
    </div>
</body>
</html>