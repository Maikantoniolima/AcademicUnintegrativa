<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_613e688dc0468',
	'title' => 'Gestão das ferramentas da pagina',
	'fields' => array(
		array(
			'key' => 'field_613e6ad22c58e',
			'label' => 'Barra Lateral',
			'name' => 'Ocbarra',
			'type' => 'true_false',
			'instructions' => 'Oculta a barra lateral',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'formula' => '',
			'calculated_format' => '',
			'blank_if_zero' => 0,
			'readonly' => 0,
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'Exibir',
			'ui_off_text' => 'Ocultar',
		),
		array(
			'key' => 'field_613e932c68e6d',
			'label' => 'Contador',
			'name' => 'Occontador',
			'type' => 'true_false',
			'instructions' => 'Oculta contador do fim da Página',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'formula' => '',
			'calculated_format' => '',
			'blank_if_zero' => 0,
			'readonly' => 0,
			'message' => '',
			'default_value' => 1,
			'ui' => 1,
			'ui_on_text' => 'Exibir',
			'ui_off_text' => 'Ocultar',
		),
		array(
			'key' => 'field_63a9c310756ee',
			'label' => 'Guia de Preço',
			'name' => 'guia_de_preco',
			'aria-label' => '',
			'type' => 'true_false',
			'instructions' => 'Ocultar guia de Preço',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'formula' => '',
			'calculated_format' => '',
			'blank_if_zero' => 1,
			'readonly' => 0,
			'message' => '',
			'default_value' => 1,
			'ui_on_text' => 'Exibir',
			'ui_off_text' => 'Ocultar',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'portfolio',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => false,
));

endif;