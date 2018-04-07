
<?php
include "dbEX5.php";

function criar(){
        global $conection;
    if(isset($_POST['enviar'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $rg = $_POST['rg'];
        $email = $_POST['email'];
        $query = "INSERT INTO cadastro (name,phone,rg,email) VALUES('$name',$phone,'$rg','$email')";
        $result = mysqli_query($conection, $query);

        if(!$result){
            die("Falha a atualização");
        }else{
            echo "Dados cadastrados com sucesso";
        }
   
    }
}

function exibirDados(){
    global $conection;
    $query = "SELECT * from cadastro";
    $result = mysqli_query($conection, $query);

    while($row = mysqli_fetch_assoc($result)){
    echo "<pre style='margin:auto;' class='col-md-6 color' >";
        print_r($row);
    // echo "<br>";
     echo "</pre>";
     }   
}

function exibirDadosAlter(){
    global $conection;
    $query = "SELECT * from cadastro";
    $result = mysqli_query($conection, $query);

    while($row = mysqli_fetch_assoc($result)){
    echo "<option>";
        echo($row['id']);
    // echo "<br>";
     echo "</option>";
     }   
}


function alterar(){
    
        global $conection;
         
    if(isset($_POST['alterar'])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $rg = $_POST['rg'];
        $email = $_POST['email'];

        $query = "UPDATE cadastro SET name = '$name',phone = $phone ,rg = '$rg', email = '$email' where id = $id";

        $result = mysqli_query($conection, $query);
    
           if(!$result){
                die("Falha a atualização");
            }else{
                echo "Dados atualizados com sucesso";
            }
    
    }
    }

    function deletar(){
        global $conection;

        if(isset($_POST['deletar'])){
            $id = $_POST['id'];


            $query = "DELETE FROM cadastro WHERE id = $id";

            $result = mysqli_query($conection,$query);

            if(!$result){
                die("Falha no delete");
            }else{
                echo "Dado deletado com sucesso";
            }
        }
    }
    

    ?>