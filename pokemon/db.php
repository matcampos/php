<?php
$conection = MYSQLI_CONNECT('localhost','root','fiap','pokemon');
            if(!$conection){
                echo "Moio" . mysqli_error($conection);
            }
?>