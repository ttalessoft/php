<?php

        $hierarquia = array(
            array(
                'nomeCargo'=>'CEO',
                'subordinados'=>array(
                    // Inicio: Diretor comercial
                    array(
                        'nomeCargo'=>'Diretor comercial',
                        'subordinados'=>array(
                            // Inicio: Gerente de vendas
                            array(
                                'nomeCargo'=>'Gerente de vendas'
                            )
                            //Termino: Gerente de vendas
                        )
                    ),
                    // Termino: Diretor comercial
                    // Inicio: Diretor financeiro
                    array(
                        'nomeCargo'=>'Diretor financeiro',
                        'subordinados'=>array(
                            //Inicio: Gerente contas a pagar
                            array(
                                'nomeCargo'=>'Gerente de contas a pagar',
                                'subordinados'=>array(
                                    // Inicio: Supervisor de pagamentos
                                    array(
                                        'nomeCargo'=>'Supervisor de pagamentos'
                                    )
                                    // Termino: Supervisor de pagamentos
                                )
                                    ),
                            // Termino: Gerente de contas a pagar
                            // Inicio: Gerente de contas
                            array(
                                'nomeCargo'=>'Gerente de compras',
                                'subordinados'=>array(
                                    // Inicio: Supervisor de suprimentos
                                    array(
                                        'nomeCargo'=>'Supervisor de suprimentos',
                                    )
                                    // Termino: supervisor de suprimentos
                                )
                                    ),
                            // Termino: Gerente de contas
                            array(
                                'nomeCargo'=>'Gerente de estoque',
                                'subordinados'=>array(
                                   array(
                                       'nomeCargo'=>'Estoquista'
                                   ),
                                   array(
                                       'nomeCargo'=>'Conferente'
                                   )
                                )
                            )

                        )
                                   ),
                                   array(
                                       'nomeCargo'=>'Gerente de T.I.',
                                       'subordinados'=>array(
                                           array(
                                               'nomeCargo'=>'Desenvolvedor'
                                           ),
                                           array(
                                               'nomeCargo'=>'Redes'
                                           )
                                       )
                                   )
                )
            )
        );

        function exibe($cargos){

            $html = '<ul>';

                foreach($cargos as $cargo){

                    $html .= '<li>';

                        $html .= $cargo['nomeCargo'];

                        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){

                            $html .= exibe($cargo['subordinados']);

                        }

                    $html .= '</li>';

                }

            $html .= '</ul>';

            return $html;

        }

        echo exibe($hierarquia);