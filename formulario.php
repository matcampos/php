<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP</title>
    </head>    
    
    <body>
        <?php
            if(isset($_POST['enviar'])){
                echo "Eba deu certo!!";
                $usuario = $_POST['usuario'];
                $senha = $_POST['senha'];
                // echo "Seu nome de usuário é: " . $usuario;
                // echo "<br>";
                // echo "Sua senha  é: " . $senha;
               

                $nomes = ["matheus","lucas","fulano"];

                if(!in_array($usuario, $nomes)){
                    echo "voce nao tem permissao";
                }else{
                    echo "Seja bem vindo " . $usuario; 
                }

                if(strlen($usuario)<5){
                    echo "mano coloca um nome maior ai!";
                }
            
                if(strlen($usuario)>30){
                    echo "mano nome muito grande!!!";
                }
            }

        ?>
       <form action="formulario.php" method="post">
            <input type="text" placeholder="user" name="usuario"><br>
            <input type="password" placeholder="password" name="senha"><br>
            <input type="submit" placeholder="user" name="enviar">
        </form>
    </body>    
    
    
</html>    