<?php

  require_once("index.php");

  // db
  $db = 'mysql';
  $db_name = 'crud_php';
  $db_port = 3306;
  $db_host = 'localhost';
  $db_user = 'root';
  $db_pass = 'jackson1500';

  try {
        //$connection = new PDO("$db:host=$db_host;port=$db_port;db_name=$db_name", "$db_user", "$db_pass");
        $connection = new PDO('mysql:host=localhost;port=3306;dbname=crud_php','root','jackson1500');
        if($connection){
          echo "Conexao feita com sucesso!";
        }
  }catch(Exception $error){
        echo "Ocorreu o seguinte erro: {$error->getMessage()}";
  };

  if(isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
  }

  // Inserir

  $sql = 'insert into cliente (nome, sobrenome, endereco, cidade, telefone, sexo) values (:nome,:sobrenome,:endereco,:cidade,:telefone,:sexo)';

  $result = $connection->prepare($sql);
  $result->bindValue(':nome',$nome);
  $result->bindValue(':sobrenome',$sobrenome);
  $result->bindValue(':endereco',$endereco);
  $result->bindValue(':cidade',$cidade);
  $result->bindValue(':telefone',$telefone);
  $result->bindValue(':sexo',$sexo);
  $result->execute();

  //criar o estrutura dinamicamente com os valores que vem do banco de dados (select)