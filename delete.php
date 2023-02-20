<?php 

    require_once("./connection.php");

    $id = $_GET['id'];

    try {
        $connection = connection();

        $sql = "DELETE FROM cliente WHERE id_cliente=$id";
        
        $result = $connection->query($sql);

        if($result == true){
            echo "Deletado com sucesso!";
            header('locacation:index02.php');
        }else{
            echo "Erro!".$sql."<br>". $connection->error;
        }

    } catch(PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }

?>