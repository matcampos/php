<?php
$conection = MYSQLI_CONNECT('localhost','root','fiap','cadastro');
            if(!$conection){
                echo "Moio" . mysqli_error($conection);
            }
?>