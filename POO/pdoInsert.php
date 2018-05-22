<?php
$connection = new PDO("mysql:dbname=cms; host=localhost","root","fiap");

$stmt = $connection->prepare("INSERT INTO usuario(username, user_password, user_role, user_nome) VALUES(:USER,:PASSWORD,:ROLE,:NOME)");


$user = 'mcampos';
$user_password = 'lala';
$user_role = 'admin';
$user_nome = 'Matheus';

$stmt->bindParam(":USER",$user);
$stmt->bindParam(":PASSWORD",$user_password);
$stmt->bindParam(":ROLE",$user_role);
$stmt->bindParam(":NOME",$user_nome);

$stmt->execute();

echo "Incluido";
?>