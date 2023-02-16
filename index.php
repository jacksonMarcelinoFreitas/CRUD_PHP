
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <form action="config.php" method="post">
            <h1>Cadastro de Pessoa</h1>
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
            <div class="container">
                <div class="radio">
                    <label for="masculino">Masculino</label>
                    <input type="radio" id="masculino" name="sexo" value="masculino">
                </div>
                <div class="radio">
                    <label for="feminino">Feminino</label>
                    <input type="radio" id="feminino" name="sexo" value="feminino">
                </div>
            </div>
            <button type="submit" name="enviar">Enviar</button>
        </form>
    </div>
</body>
</html>


