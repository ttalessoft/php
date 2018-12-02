<?php

    spl_autoload_register(function($nameClass){

        $dirClass = 'class';
        $fileName = $dirClass . DIRECTORY_SEPARATOR . $nameClass . '.php';

        if(file_exists($fileName) === true){

            require_once($fileName);

        }
    });