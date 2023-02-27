<?php

    require_once("./connection.php");

    function select(){

        $connection = connection();

        $sql = "SELECT * FROM cliente WHERE ativo='S' ";
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        return $stmt;
    }

?>

<!-- 
https://imasters.com.br/back-end/como-usar-pdo-com-banco-de-dados-mysql#:~:text=Executando%20SELECT%20com%20PDO&text=Eles%20aparecem%20em%20dois%20%C3%ADndices,FETCH_ASSOC%20para%20o%20m%C3%A9todo%20fetchAll. 
-->