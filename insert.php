<?php

  require_once("./connection.php");

  function insert(){
    try{
      $connection = connection();

      if(isset($_POST['enviar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
      }else{
        header('Location: index.php?mensagem_erro=1');
      }

      // Insert
      $sql = "INSERT INTO cliente (nome, sobrenome, endereco, cidade, telefone, sexo) VALUES (:nome,:sobrenome,:endereco,:cidade,:telefone,:sexo)";
    
      $stmt = $connection->prepare($sql);
      $stmt->bindValue(':nome',$nome);
      $stmt->bindValue(':sobrenome',$sobrenome);
      $stmt->bindValue(':endereco',$endereco);
      $stmt->bindValue(':cidade',$cidade);
      $stmt->bindValue(':telefone',$telefone);
      $stmt->bindValue(':sexo',$sexo);
      $stmt->execute();

      header('Location: index.php');

    }catch(Exception $e){
      echo 'Erro ao enviar:', $e->getMessage();
      header('Location: index.php?mensagem_erro=1');
    }
  }

  insert();
?>