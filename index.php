<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastro de Clientes</title>

    <link rel="stylesheet" href="./css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="./js/validar.js" type="text/javascript"></script>
    <script src="./js/modal.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <?php 
                if(isset($_GET['mensagem_erro'])){
                    if($_GET['mensagem_erro'] == 1){
                        echo "Requisição insert inválida";
                    }
                }
            ?>
        <form action="insert.php" method="post" id="form" onsubmit="return validacaoInsert();">
            <h1>Cadastro de Clientes</h1>
            <div class="container">
                <label for="nome">Nome</label>
                <input type="text" name="nome" placeholder="digite seu nome">
            </div>
            <div class="container">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" placeholder="digite seu sobrenome">
            </div>
            <div class="container">
                <label for="enedereco">Endereco</label>
                <input type="text" name="endereco" placeholder="digite seu endereco">
            </div>
            <div class="container">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" placeholder="digite seu sobrenome">
            </div>
            <div class="container">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" placeholder="digite seu telefone">
            </div>
            <div class="container input-radio">
                <div class="radio">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino">
                </div>
                <div class="radio">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="feminino" name="sexo" value="feminino">
                </div>
            </div>
            <div class="buttons">
                <button type="submit" name="button-form" type="button">Enviar</button>
                <div class="ver_cadastro">
                    <a href="./exibir_cadastro.php">Ver cadastros</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>