<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style03.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous">
    </script>
    <script src="./js/buttons.js" type="text/javascript"></script>
</head>

<body>
    <main class="wrapper">
        <div class="container">
            <img src="./assets/imagem2.png" alt="imagem tela de login">
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
                    <div class="senha">
                        <input name="password" type="password" placeholder="ex.: senha123">
                        <span class="closePass"><img src="./assets/closeEye.png"></span>
                        <span class="showPass hide"><img src="./assets/openEye.png"></span>
                    </div>
                </div>
                <div class="input-form">
                    <button name="enviar" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>