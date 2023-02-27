<?php 

    require_once("./connection.php");

    function update(){

        $id = $_GET['id'];
        echo "$id";
        
        try{
            $connection = connection();

            if(isset($_POST['enviar'])){
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $endereco = $_POST['endereco'];
                $cidade = $_POST['cidade'];
                $telefone = $_POST['telefone'];
                $sexo = $_POST['sexo'];
            }else{
                // header('Location: editar_cadastro.php?mensagem_erro=1');
            }
    
            $sql = "UPDATE cliente SET nome=:nome, sobrenome=:sobrenome, endereco=:endereco, cidade=:cidade, telefone=:telefone, sexo=:sexo WHERE id_cliente=:id";
    
            $stmt = $connection->prepare($sql);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':sobrenome', $sobrenome);
            $stmt->bindValue(':endereco', $endereco);
            $stmt->bindValue(':cidade', $cidade);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->bindValue(':sexo', $sexo);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            // header("Location: exibir_cadastro.php");
            echo "update feito com sucesso";

        }catch (PDOException $e){
            echo 'Erro ao atualizar: '. $e->getMessage();
            // header("Location: editar_cadastro?id='$id'.php");
        };
    }

    update();
    
?>