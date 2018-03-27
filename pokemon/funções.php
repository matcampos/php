
<?php
include "db.php";
function listaTipoFogo(){
        global $conection;
        $query = "SELECT * from pokemon WHERE type = 'fogo'";
        $result = mysqli_query($conection, $query);

        while($row = mysqli_fetch_assoc($result)){
            echo "<pre>";
        print_r($row);
        // echo "<br>";
         echo "</pre>";
         }   
   
    }

    function criar(){
        global $conection;
if(isset($_POST['enviar'])){
        $name = $_POST['name'];
        $type = $_POST['type'];
        $hp = $_POST['hp'];
        $query = "INSERT INTO pokemon (name,type,hp) VALUES('$name','$type',$hp)";
        $result = mysqli_query($conection, $query);

        if(!$result){
            die("Falha a atualização");
        }else{
            echo "Dados atualizados com sucesso";
        }
   
    }
}

function exibirDados(){
    global $conection;
    $query = "SELECT * from pokemon";
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
        $type = $_POST['type'];
        $hp = $_POST['hp'];
        
        $query = "UPDATE pokemon SET name = '$name',type = '$type',hp = $hp where id = $id";

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


            $query = "DELETE FROM POKEMON WHERE id = $id";

            $result = mysqli_query($conection,$query);

            if(!$result){
                die("Falha no delete");
            }else{
                echo "Dado deletado com sucesso";
            }
        }
    }
    

    ?>