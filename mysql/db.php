<?php
$conection = MYSQLI_CONNECT('localhost','root','fiap','loginapp');
            if(!$conection){
                echo "Moio" . mysqli_error($conection);
            }
?>