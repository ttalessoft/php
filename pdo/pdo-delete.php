<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

    //$login = "jose da silva sauro";
    //$password = "45kk21";
    $id = 3;

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Excluido";