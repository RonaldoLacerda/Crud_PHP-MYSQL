<?php
    $servername = "localhost";
    $database = "db_usuarios";
    $username = "root";
    $password = "";

    // Criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);
    
    // Checando a conexão
    /*if (!$conn) {
        echo "Falha na conexão: ";
    }
    echo "Conectado com Sucesso";
    //mysqli_close($conn);*/
?>
