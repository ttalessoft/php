<?php

    class Pessoa{

        public $nome;
        
        public function falar(){

            return 'Meu nome é: ' . $this->nome;

        }

    }

    $glaucio = new Pessoa();
    $glaucio->nome = 'ttales';
    echo $glaucio->falar();