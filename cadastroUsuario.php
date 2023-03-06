<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style03.css">
</head>

<body>
    <main class="wrapper">
        <div class="container">
            <img src="./assets/imagem.png" alt="imagem tela de login">
        </div>
        <div class="container">
            <form action="usuario.php" method="post" id="form">
                <div class="input-form">
                    <label for="nome">Nome</label>
                    <input name="nome" type="text" placeholder="Jhon Doe">
                </div>
                <div class="input-form">
                    <label for="email">Email</label>
                    <input name="email" type="email" placeholder="jhonDoe@gmail.com">
                </div>
                <label for="email"></label>
                <div class="input-form">
                    <label for="password">Senha</label>
                    <input name="password" type="password" placeholder="ex.: senha123">
                </div>
                <div class="input-form">
                    <button name="enviar" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>