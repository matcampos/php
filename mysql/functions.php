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
?>