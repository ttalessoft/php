<?php

    $dt = new Datetime();

    echo $dt->format('d/m/Y H:i:s') . '<br>';

    // padrao para se somar datas
    $periodo = new DateInterval('P33D');

    $dt->add($periodo);

    echo $dt->format('d/m/Y H:i:s') . '<br>';