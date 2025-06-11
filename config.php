<?php
    $servidor = "localhost";
    $dbusuario = "root";
    $dbsenha = "";
    $dbname = "cadastro1db";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if (!$conn){
        die("Falha na conexão: " . mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida!";
    }
?>