<?php

    // definir um padrão de timestamp do Brasil
    setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');


    // ucwords - corrige as palavras para o padrao abnt de acentuacao
    echo ucwords(strftime('%A %B'));

    echo strtotime('2018-12-01');

