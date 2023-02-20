
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editar Cadastro</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <?php
        require "connection.php";
        $connection = connection();

        $cliente = [];
        $id = $_GET['id'];

        if($id){
            $sql = $connection->prepare("SELECT * FROM cliente WHERE id_cliente = :id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            if($sql->rowCount() > 0){
                $cliente = $sql->fetch(PDO::FETCH_ASSOC);
            }else{
                header("Location: exibir_cadastro.php");
                exit;
            }
        }else{
            header("Location: exibir_cadastro.php");
            exit;
        }
    ?>
    <div class="wrapper">
        <form action="update.php" method="post" id="form">
            <h1>Editar cadastro</h1>
            <input type="hidden" name="id"  value="<?= $cliente['id_cliente'];?>">
            <div class="container">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="digite seu nome" value="<?= $cliente['nome'];?>">
            </div>
            <div class="container">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" placeholder="digite seu sobrenome" value=" <?= $cliente['sobrenome'];?>">
            </div>
            <div class="container">
                <label for="enedereco">Endereco</label>
                <input type="text" name="endereco" placeholder="digite seu endereco" value=" <?= $cliente['endereco'];?>">
            </div>
            <div class="container">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" placeholder="digite sua cidade" value=" <?= $cliente['cidade'];?>">
            </div>
            <div class="container">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" placeholder="digite seu telefone" value="<?= $cliente['telefone'];?>">
            </div>
            <div class="container input-radio" >
                <?php 
                    if($cliente['sexo'] == 'masculino'){
                        echo "<div class='radio'>
                            <label for='masculino'>Masculino</label>
                            <input type='radio' id='masculino' name='sexo' value='masculino' checked>
                        </div>
                        <div class='radio'>
                            <label for='feminino'>Feminino</label>
                            <input type='radio' id='feminino' name='sexo' value='feminino' >
                        </div> ";
                    }else{
                        echo "<div class='radio'>
                            <label for='feminino'>Feminino</label>
                            <input type='radio' id='feminino' name='sexo' value='feminino' checked>
                        </div> 
                        <div class='radio'>
                            <label for='masculino'>Masculino</label>
                            <input type='radio' id='masculino' name='sexo' value='masculino' >
                        </div>";
                    }
                ?>
            </div>
            <button type="submit" name="enviar" >Atualizar</button>
        </form>
    </div>
    <!-- <script src="./main.js"></script> -->
</body>
</html>



