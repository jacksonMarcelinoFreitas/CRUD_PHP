<?php 

    require_once("./connection.php");

    
    
    function validarCadastro(){
        
        $connection = connection();

        if(isset($_POST['enviar'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);
        }else{
            // header('Location: telaLogin.php?mensagem_erro=1');
        }

        try{
            $sql = $connection->prepare("SELECT * FROM usuarios WHERE password = :password and email = :email");
            $sql->bindValue(':password', $password);
            $sql->bindValue(':email', $email);
            $sql->execute();

            if($sql->rowCount() > 0){
                // var_dump($cliente);
                header('Location: index.php');
                exit;
            }else{
                header('Location: telaLogin.php?mensagem_erro=2');
                exit;
            }
        }catch(Exception $e){
            echo 'Erro ao encontar usuário:', $e->getMessage();
            header('Location: telaLogin.php?mensagem_erro=2');
        }

        return 0;
    }

    validarCadastro();

    // validarCadastro();

?>