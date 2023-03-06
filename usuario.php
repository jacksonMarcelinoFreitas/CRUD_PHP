<?php 


    if(!isset($_POST['enviar'])){
        header('Location: cadastroUsuario.php');
        exit;
    }

    require_once('./connection.php');

    $connection = connection();

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = $connection->prepare("SELECT id_usuario FROM usuarios WHERE email = :email");
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() > 0){
        header('Location: cadastroUsuario.php?erro=1');
        exit;
    }

    $senhaCriptografada = md5($password);

    $sql = "INSERT INTO usuarios (nome, email, password) VALUES (:nome,:email,:password)";
    
    $stmt = $connection->prepare($sql);
    $stmt->bindValue(':nome',$nome);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':password',$senhaCriptografada);
    $stmt->execute();

    header('Location: telaLogin.php');

?>