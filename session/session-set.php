<?php

    // funcoes de inicializacao
    require_once('config.php');

    session_unset();

    // apenas imprime
    echo $_SESSION['nome'];