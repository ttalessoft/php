<?php

    abstract class Animal{

        public function falar(){
            return "Som!";
        }

        public function mover(){
            return "Andar!";
        }
    }

    class Cachorro extends Animal{

        public function falar(){
            return "Late!";
        }
    }

    class Gato extends Animal{

        public function falar(){
            return "Mia!";
        }
    }

    $pluto = new Cachorro();
    $xana = new Gato();

    echo $pluto->falar();
    echo $pluto->mover();

    echo "-----------------------------</br>";

    echo $xana->falar();
    echo $xana->mover();