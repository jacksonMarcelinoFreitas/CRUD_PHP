<?php

    require_once("./connection.php");


    function select(){

        $connection = connection();
        $sql = "SELECT * FROM cliente WHERE ativo='S' ";
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        return $stmt;
    }


    function showClientToEdit(){
        $connection = connection();
        
        $cliente = [];
        $id = $_GET['id'];

        if($id){
            $sql = $connection->prepare("SELECT * FROM cliente WHERE id_cliente = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $cliente = $sql->fetch(PDO::FETCH_ASSOC);
                return $cliente;
                // var_dump($cliente);
            }
        }else{
            header("Location: exibir_cadastro.php");
            exit;
        }
    }

    function selectSex($cliente){

        if($cliente['sexo']){
            $sexo = [
                'masc' => '',
                'femi' => ''
            ];

            if($cliente['sexo'] == 'masculino'){
                return $sexo = ['masc' => 'checked', 'femi' => ''];
            }else{
                return $sexo = ['masc' => '', 'femi' => 'checked'];
            }
        }else{
            echo "Por favor, selecione um sexo!";
        }

    }

?>

<!-- 
https://imasters.com.br/back-end/como-usar-pdo-com-banco-de-dados-mysql#:~:text=Executando%20SELECT%20com%20PDO&text=Eles%20aparecem%20em%20dois%20%C3%ADndices,FETCH_ASSOC%20para%20o%20m%C3%A9todo%20fetchAll. 
-->