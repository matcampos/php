<?php
    $conection = MYSQLI_CONNECT('localhost','root','','cadastro');
                if(!$conection){
                    echo "Moio" . mysqli_error($conection);
                }
?>