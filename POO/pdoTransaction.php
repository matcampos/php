<?php
    $connection = new PDO("mysql:dbname=cms; host=localhost","root","fiap");

    $connection->beginTransaction();

    $stmt = $connection->prepare("DELETE FROM usuario where user_id = ?");

    $user_id = 4;

    $stmt->execute(array($user_id));

    $erro = false;

    if($erro == false){
        $connection->commit();
    }else{
        $connection->rollback();
    }

    echo "Deletado";
?>