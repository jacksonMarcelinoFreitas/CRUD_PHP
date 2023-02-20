## Crud using PDO in PHP

### BD Connection
```
    <?php
        // Conexão com o banco de dados usando PDO
        $dsn = 'mysql:host=nomeservidor;dbname=nomedobanco';
        $usuario = 'nomeusuario';
        $senha = 'senhadousuario';

        try {
            $pdo = new PDO($dsn, $usuario, $senha);
        } catch (PDOException $e) {
            echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
            exit();
        }
    ?>

```

### Insert

```
    <?php
    
        // Dados do novo usuário a serem inseridos na tabela
        $novo_nome = 'Novo usuário';
        $novo_email = 'novousuario@exemplo.com';

        // Query para inserir um novo usuário na tabela
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";

        // Preparar a query
        $stmt = $pdo->prepare($sql);

        // Vincular os parâmetros
        $stmt->bindParam(':nome', $novo_nome);
        $stmt->bindParam(':email', $novo_email);

        // Executar a query
        if ($stmt->execute()) {
            echo "Novo usuário inserido com sucesso!";
        } else {
            echo "Erro ao inserir novo usuário.";
        }
    ?>
```
> Neste exemplo, a query SQL é preparada com placeholders para os valores que serão inseridos. Em seguida, os valores são vinculados aos placeholders usando o método bindParam(). Finalmente, a query é executada usando o método execute(). Se a execução for bem-sucedida, uma mensagem de sucesso é exibida. Caso contrário, uma mensagem de erro é exibida.

### Select

```

    <?php

        // Query para selecionar todos os usuários da tabela
        $sql = "SELECT * FROM usuarios";

        // Preparar a query
        $stmt = $pdo->prepare($sql);

        // Executar a query
        if ($stmt->execute()) {
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            // Loop para exibir os resultados
            foreach ($usuarios as $usuario) {
                echo "ID: " . $usuario['id'] . "<br>";
                echo "Nome: " . $usuario['nome'] . "<br>";
                echo "Email: " . $usuario['email'] . "<br><br>";
            }
        } else {
            echo "Erro ao selecionar usuários.";
        }
    ?>

```

> Neste exemplo, a query SQL é preparada sem placeholders, já que não há valores a serem vinculados. Em seguida, a query é executada usando o método execute(). Se a execução for bem-sucedida, o resultado é recuperado usando o método fetchAll(), que retorna um array com todos os registros. Em seguida, um loop é usado para exibir os resultados. Caso contrário, uma mensagem de erro é exibida. Note que o parâmetro PDO::FETCH_ASSOC especifica que o resultado deve ser retornado como um array associativo.

### Update

```
    <?php
        // Query para atualizar o nome e o email de um usuário com ID igual a 1
        $id_usuario = 1;
        $novo_nome = 'Novo nome';
        $novo_email = 'novoemail@exemplo.com';

        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";

        // Preparar a query
        $stmt = $pdo->prepare($sql);

        // Vincular os parâmetros
        $stmt->bindParam(':nome', $novo_nome);
        $stmt->bindParam(':email', $novo_email);
        $stmt->bindParam(':id', $id_usuario);

        // Executar a query
        if ($stmt->execute()) {
            echo "Dados do usuário atualizados com sucesso!";
        } else {
            echo "Erro ao atualizar os dados do usuário.";
        }
    ?>
```

> Neste exemplo, a query SQL é preparada com placeholders para os valores que serão atualizados. Em seguida, os valores são vinculados aos placeholders usando o método bindParam(). Finalmente, a query é executada usando o método execute(). Se a execução for bem-sucedida, uma mensagem de sucesso é exibida. Caso contrário, uma mensagem de erro é exibida.

### Delete

```
    <?php

        // Query para excluir um usuário com ID igual a 1
        $id_usuario = 1;

        $sql = "DELETE FROM usuarios WHERE id = :id";

        // Preparar a query
        $stmt = $pdo->prepare($sql);

        // Vincular o parâmetro
        $stmt->bindParam(':id', $id_usuario);

        // Executar a query
        if ($stmt->execute()) {
            echo "Usuário excluído com sucesso!";
        } else {
            echo "Erro ao excluir o usuário.";
        }
    ?>

```

> Neste exemplo, a query SQL é preparada com um placeholder para o valor que será excluído. Em seguida, o valor é vinculado ao placeholder usando o método bindParam(). Finalmente, a query é executada usando o método execute(). Se a execução for bem-sucedida, uma mensagem de sucesso é exibida. Caso contrário, uma mensagem de erro é exibida.

<div class="container">
    <a href="perfilGitHub">
        <img src="./assets/Perfil Readme.png" alt="">
        <p>Jackson Freitas</p>
    </a>
</div>


