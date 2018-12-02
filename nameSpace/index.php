<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("ttales");
    $cad->setEmail("ttales@ttales.com");
    $cad->setSenha("123456");

    $cad->registrarVenda();