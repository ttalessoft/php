<?php

    class Endereco{

        private $logradouro;
        private $numero;
        private $cidade;

        public function __construct($logradouro, $numero, $cidade){

                $this->logradouro = $logradouro;
                $this->numero = $numero;
                $this->cidade = $cidade;

        }

        public function getLogradouro(){
            return $this->logradouro;
        }

        public function getNumero(){
            return $this->numero;
        }

        public function getCidade(){
            return $this->cidade;
        }

    }

    $meuEndereco = new Endereco('rua goias', '1', 'inhumas');
    
    var_dump($meuEndereco);

    
   
    var_dump($meuEndereco->getLogradouro());

    var_dump($meuEndereco->getNumero());

    var_dump($meuEndereco->getCidade());

