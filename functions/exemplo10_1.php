<?php
 
	$hierarquia = array(
		array(
			'nome_cargo' => 'CEO',
			'subordinados' => array(
				array(
					'nome_cargo' => 'Diretor Comercial',
					'subordinados' => array(
						array(
							'nome_cargo'=>'Gerente de Vendas'
						)
					)
				),
 
				array(
					'nome_cargo' => 'Diretor de TI',
					'subordinados' => array(
						array(  
							'nome_cargo' => 'Gerete de Infra Estrututa',
							'subordinados' => array(
								array(
									'nome_cargo' => 'Suervisor de Infra Estrututa'
								) 
							) 
						), 
						array(
							'nome_cargo' => 'Gerente de Desenvolvimento',
							'subordinados' => array(
								array(
									'nome_cargo' => 'Supervisor Dev'
								)
							)	
						) 
					) 
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