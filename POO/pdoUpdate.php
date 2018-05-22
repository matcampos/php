<?php
$connection = new PDO("mysql:dbname=cms; host=localhost","root","fiap");

$stmt = $connection->prepare("UPDATE usuario SET username = :USER, user_password = :PASSWORD, user_role = :ROLE, user_nome = :NOME  WHERE user_id = :ID");


$user = 'matheus';
$user_password = 'lalalala';
$user_role = 'admin';
$user_nome = 'Matheus';
$user_id = 2;

$stmt->bindParam(":USER",$user);
$stmt->bindParam(":PASSWORD",$user_password);
$stmt->bindParam(":ROLE",$user_role);
$stmt->bindParam(":NOME",$user_nome);
$stmt->bindParam(":ID",$user_id);


$stmt->execute();

echo "Atualizado";
?>