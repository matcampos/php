<?php
    $connection = new PDO("mysql:dbname=cms; host=localhost","root","fiap");

    $stmt = $connection->prepare("DELETE FROM usuario where user_id = :ID");

    $user_id = 3;

    $stmt->bindParam(":ID",$user_id);

    $stmt->execute();

    echo "Deletado";
?>