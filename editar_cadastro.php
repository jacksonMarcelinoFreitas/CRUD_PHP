<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="./css/style.css">

    <script src="./js/validar.js" type="text/javascript" defer></script>

    <title>Editar Cadastro</title>
</head>

<body>
    <?php
            require "connection.php";
            require "select.php";
            
            $connection = connection();
            $cliente = showClientToEdit(); 
            $checkedOrNot = selectSex($cliente);
            // var_dump($checkedOrNot['masc']);

            if($checkedOrNot){
                $SelectOrNotMasc = '';
                $SelectOrNotFemi = '';
                if($checkedOrNot['masc'] == 'checked'){
                    $SelectOrNotMasc = 'checked';
                }else{
                    $SelectOrNotFemi = 'checked';
                }
            }

            
            if(isset($_GET['mensagem'])){
                $mensagem = $_GET['mensagem'];
                if($mensagem == 1){
                    echo    "<script type='text/javascript'>
                                alert('Não foi possível realizar a atualização!');
                            </script>";
                }else{
                    echo    "<script type='text/javascript'>
                                alert('Update feito com sucesso!');
                            </script>";
                }
            }
            
            
        ?>
    <div class="wrapper">
        <form action="update.php" method="post" id="form" onsubmit="return validacaoUpdate();">
            <h1>Editar cadastro</h1>
            <input type="hidden" name="id" value="<?php echo $cliente['id_cliente'];?>">
            <div class="container">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="digite seu nome" value="<?php echo $cliente['nome'];?>">
            </div>
            <div class="container">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" placeholder="digite seu sobrenome"
                    value=" <?php echo $cliente['sobrenome'];?>">
            </div>
            <div class="container">
                <label for="enedereco">Endereco</label>
                <input type="text" name="endereco" placeholder="digite seu endereco"
                    value="<?php echo $cliente['endereco'];?>">
            </div>
            <div class="container">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" placeholder="digite sua cidade"
                    value="<?php echo $cliente['cidade'];?>">
            </div>
            <div class="container">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" placeholder="digite seu telefone"
                    value="<?php echo $cliente['telefone'];?>">
            </div>

            <div class="container input-radio">
                <div class="radio">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino" <?php echo $SelectOrNotMasc?>>
                </div>
                <div class="radio">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="feminino" name="sexo" value="feminino" <?php echo $SelectOrNotFemi?>>
                </div>
            </div>

            <button type="submit" name="enviar">Atualizar</button>
        </form>
    </div>
</body>

</html>