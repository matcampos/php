<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>    
    
    <body>
    <?php
            if(isset($_POST['enviar'])){
              //  echo "Eba deu certo!!";
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                $email = $_POST['email'];
                $estado = $_POST['estado'];

                $erro = false;


                if(strlen($usuario)<5){
                    $erro = true;
                    echo "O nome de usuario deve ter no mínimo 5 caraceres!";
                }elseif(strlen($senha)<4){
                    $erro = true;
                    echo "A senha deve ter no mínimo 4 caracteres!";
                }elseif(!strstr($email, "@")){
                    $erro = true;
                    echo "O email deve conter @!!";
                }elseif(strlen($estado)<2){
                    $erro = true;
                    echo "O estado deve ter no minimo 2 caracteres!!!!";
                }elseif($erro ==false){
                    echo "Todos os campos estão corretos!!";
                }
            }

        ?>
    </body>    
    
    
</html>    