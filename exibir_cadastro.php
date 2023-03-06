<!DOCTYPE html>
<html lang='pt-BR'>

<head>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>

    <link href='https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap' rel='stylesheet'>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1' />
    <title>Show Clientes</title>
    <link rel='stylesheet' href='./css/style02.css'>

    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous">
    </script>

    <script src="./js/buttons.js"></script>
</head>

<body>
    <div class='wrapper'>
        <table>
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php 
                    require_once('./select.php');
                    require_once('./connection.php');

                    $connection = connection();
                    $rows = select();

                    if(($rows) and ($rows->rowCount() != 0)){
                        while($row = $rows->fetch(PDO::FETCH_ASSOC)){   
                            $id = $row['id_cliente'];   
                            $nome = $row['nome'];
                            $sobrenome = $row['sobrenome'];
                            $endereco = $row['endereco'];
                            $cidade = $row['cidade'];
                            $telefone = $row['telefone'];
                            $sexo = $row['sexo'];
                            echo 
                            '<tr>
                                <td scope="row">'.$id.'</td>
                                <td>'.$nome.'</td>
                                <td>'.$sobrenome.'</td>
                                <td>'.$endereco.'</td>
                                <td>'.$cidade.'</td>
                                <td>'.$telefone.'</td>
                                <td>'.$sexo.'</td>
                                <td class="action">
                                    <a href="editar_cadastro.php?id='.$id.'"class="update_button"> 
                                        <svg  viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.3 6.925L12.05 2.725L13.45 1.325C13.8333 0.941666 14.3043 0.75 14.863 0.75C15.4217 0.75 15.8923 0.941666 16.275 1.325L17.675 2.725C18.0583 3.10833 18.2583 3.571 18.275 4.113C18.2917 4.655 18.1083 5.11733 17.725 5.5L16.3 6.925ZM14.85 8.4L4.25 19H0V14.75L10.6 4.15L14.85 8.4Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="javascript:void(0);"class="delete_button link" name="link_exclusao" id_registro="'.$id.'">
                                        <svg  viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 18C2.45 18 1.979 17.8043 1.587 17.413C1.195 17.0217 0.999333 16.5507 1 16V3H0V1H5V0H11V1H16V3H15V16C15 16.55 14.804 17.021 14.412 17.413C14.02 17.805 13.5493 18.0007 13 18H3ZM5 14H7V5H5V14ZM9 14H11V5H9V14Z" fill="white"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>';
                        };
                    };
                ?>
            </tbody>
        </table>
        <div class="footer_table" name="footer_table">
            <button>Voltar</button>
        </div>
    </div>
</body>

</html>