<?php

    class Documento{

        private $numero;

        public function getNumero(){

            return $this->numero;

        }

        public function setNumero($n){

            $this->numero = $n;

        }

    }

    class CPF extends Documento{

        public function validar():bool{

            $numeroCpf = $this->getNumero();

            // regra de validacao cpf

            return true;

        }
    }

    $doc = new CPF();

    $doc->setNumero('999.555.333-88');

    var_dump($doc->validar());

    echo '<br/>';

    echo $doc->getNumero();