<?php 
include "db.php";

    function mostraDados(){
        global $conection;
        $query = "SELECT * from usuario";
        $result = mysqli_query($conection, $query);
        
        while($row = mysqli_fetch_assoc($result)){
            $id =$row['id'];
            echo "<option value='$id'>" . $id . "</option>";    
        }
    }

    function atualizaTabela(){
        global $conection;
        if(isset($_POST['update'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $id = $_POST['id'];
            
            $query = "UPDATE usuario SET username = '$username',password = '$password' where id = $id";
            
            $result = mysqli_query($conection, $query);
            
            if(!$result){
                die("Falha a atualização");
            }else{
                echo "Dados atualizados com sucesso";
            }
            }
    }

    function delete(){
        global $conection;
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            
            $query = "DELETE FROM usuario where id = $id";
            
            $result = mysqli_query($conection, $query);
            
            if(!$result){
                die("Falha a atualização");
            }else{
                echo "Dado deletado com sucesso!!";
            }
            }
    }

    function create(){
        global $connection;
        if(isset($_POST['enviar'])){
            //estabelecer a Conexão com o MySQL
        
           $connection =  mysqli_connect('localhost','root','fiap','loginapp');
            // if($connection){
            //         echo "eba conectado com sucesso!";
            // }else{
            //     die('moio');
            // }
            if(!$connection){
                die('Moio');
            }
        
            $name = $_POST['username'];
            $password = $_POST['password'];
            // query para inserir os dados de acordo com os nomes das variáveis
            $query = "INSERT INTO usuario(username, password) VALUES('$name','$password')";
        
            // função para executar um comando sql
            $result = mysqli_query($connection,$query);
        
            //validação
        
            if(!$result){
                die('Moio a inclusão');
            }else{
                echo "<script>alert('Dados inseridos com sucesso!!')</script>";
            }
        }
    }


    function show(){
        global $conection;
        $query = "SELECT * from usuario";
        $result = mysqli_query($conection, $query);
        while($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
        print_r($row['username']);
        // echo "<br>";
         echo "</pre>";
         }
    }
    
?>