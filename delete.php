<?php 

    require_once("./connection.php");

    $id = $_GET['id'];
    $ativo = 'N';

    // try {
    //     $connection = connection();

    //     $sql = "DELETE FROM cliente WHERE id_cliente=$id";
        
    //     $result = $connection->query($sql);

    //     if($result == true){
    //         header('Location: exibir_cadastro.php');
    //         exit;
    //     }else{
    //         echo "Erro!".$sql."<br>". $connection->$error;
    //     }

    // } catch(PDOException $e) {
    //     echo 'Error: ' . $e->getMessage();
    // }

   
    try{
        $connection = connection();
        
        // $sql = "UPDATE cliente SET ativo=:ativo WHERE id_cliente=:id";
        $sql = "UPDATE cliente SET ativo='$ativo' WHERE id_cliente=$id";

        $result = $connection->query($sql);

        if($result == true){
            header('Location: exibir_cadastro.php');
            exit;
        }else{
            echo "Erro!".$sql."<br>". $connection->$error;
        }
    //     try{
    //         $stmt = $connection->prepare($sql);
    }catch (PDOException $e){
        echo 'Erro ao atualizar: '. $e->getMessage();
    };
    //     $stmt->bindValue(':ativo', $ativo);
    //     $stmt->bindValue(':id', $id);
    //     $stmt->execute();
    // }catch (PDOException $e){
    //     echo 'Erro ao atualizar: '. $e->getMessage();
  
    

?>