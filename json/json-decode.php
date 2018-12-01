<?php

    $json = 
    '[
      {
        "nome": "ttale",
        "cpf": "999.999.999-99",
        "rg": "99.999-9",
        "dtNasc": "2018-08-08"
      },
      {
        "nome": "maria",
        "cpf": "888.888.888-88",
        "rg": "88.888-8",
        "dtNasc": "2018-01-01"
      }
    ]';

    // json >> array
    $data = json_decode($json, true);

    var_dump($data);

