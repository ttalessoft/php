<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

    $login = "jose da silva sauro";
    $password = "45kk21";
    $id = 3;

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD", $password);
    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Editado";