<?php

    abstract class Automovel implements Veiculo{

        public function acelerar($velocidade){
            echo '<p>O veículo acelerou: ' . $velocidade . ' km/h </p></br>';
        }

        public function freiar($tempo){
            echo '<p>O veículo parou em: ' . $tempo . ' seg </p></br>';
        }

        public function mudarMarcha($marcha){
            echo '<p>A marcha é: ' . $marcha. ' </p></br>';
        }

        public function abastecer($qntLitros, $vlrCombustivel){
            echo 
            '<p>Foram colocados :' . $qntLitros . 
            ' por um valor de ' . $vlrCombustivel . 
            ' e saiu por R$ ' . $qntLitros*$vlrCombustivel . 
            '</p></br>';
        }
    }