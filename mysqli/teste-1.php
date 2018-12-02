<?php

    $conn = new mysqli('localhost', 'root', '', 'dbphp7');

    if ($conn->connect_error) {
        echo "error: " . $conn->connect_error;
    }else{
        echo ">>conectou </br>";
    }

    $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");

    $stmt->bind_param("ss", $login, $pass);

    $login = "user";
    $pass = "senha123";

    $stmt->execute();

    