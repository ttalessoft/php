<?php

interface Veiculo {

    public function acelerar($velocidade);

    public function freiar($tempo);

    public function mudarMarcha($marcha);

    public function abastecer($qntLitros, $vlrCombustivel);

}
