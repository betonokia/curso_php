<?php

//Trabalhando com Funções Recursivas

$hierarquia = array (
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            //Inicio: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    array(
                    //Inicio: Gerente de Vendas
                    'nome_cargo'=>'Gerente de Vendas'
                )
                //Término: Gerente de Vendas
            )   
        ), //Término: Diretor Comercial
          //Inicio: Diretor de TI 
           array(
               'nome_cargo' => 'Diretor de TI',
               'subordinados' => array(
                   //Inicio Geretnte de Infra
                   array(   
                       'nome_cargo' => 'Gerete de Infra Estrututa',
                       'subordinados' => array(
                           //Inicio: Suervisor de TI
                           array(
                               'nome_cargo' => 'Suervisor de Infra Estrututa'
                            ) //Término: Supervisor de Infra                      
                       ) 
                    ), //Término: Gerente de TI
                       //Inicio Gerente de Dev
                    array(
                        'nome_cargo' => 'Gerente de Desenvolvimento',
                        'subordinados' => array(
                            //Inicio Supervisor Dev
                            array(
                                'nome_cargo' => 'Supervisor Dev'
                            ) //Término Supervisor Dev
                        )
                    ) // Término Gerente Dev
            ) //Término: Diretor de TI 
        )
    )
)
);

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";
        $html .= $cargo['nome_cargo'];  

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);
        }

        $html .= "</li>";
    }


    $html .= '</ul>';

    return $html;

}

echo exibe($hierarquia);



?>