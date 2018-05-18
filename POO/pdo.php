<?php
$connection = new PDO("mysql:dbname=cms; host=localhost","root","fiap");

$stmt = $connection->prepare("SELECT * FROM categoria");

$stmt->execute();

$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

// print_r($resultado);

foreach($resultado as $res){
    foreach($res as $key => $value){
       echo "<strong>" . $key . "</strong> " . $value . "<br>" . "_________________ <br>";
    }
}

?>