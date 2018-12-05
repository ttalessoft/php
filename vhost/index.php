<?php

    require_once("vendor/autoload.php");

    $app = new \Slim\Slim();

    // Rota para a página inícial
    $app->get('/', function(){
       echo "Início!";
    });

    // Rota json
    $app->get('/json', function(){
        echo json_encode(array(
            'date'=>date("d-m-Y H:i:s") 
        ));
    });

    // Rota alternativa 
    $app->get('/hello/:name', function($name){
        echo "hello, " . $name;
    });

    $app->run();