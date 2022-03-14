<?php
/*
Plugin Name: Teste Gridmidia CPT
Plugin URI: https://github.com/brobertofs/wp-gridmidia-cpt
Description: Plugin para criação de Custom Post Types
Version: 1.0
Text Domain: teste_gridmidia_cpt
Author: Bruno Roberto
Author URI: https://www.linkedin.com/in/brobertofs/
License: GPL
*/


// Hook <strong>teste_gridmidia_cpt()</strong> Para chamar o Hook
add_action( 'init', 'teste_gridmidia_cpt' );
 

// Função de criação de Custom Post Types para Gridmidia
function teste_gridmidia_cpt() {
 
  // Definindo os rótulos
  $labels = array(
    'name'               => 'Teste Gridmidia CPT',
    'singular_name'      => 'Teste Gridmidia CPT',
    'add_new'            => 'Adicionar novo post Teste',
    'add_new_item'       => 'Adicionar novo post Teste',
    'edit_item'          => 'Editar post Teste',
    'new_item'           => 'Novo post Teste',
    'all_items'          => 'Todos os posts Testes',
    'view_item'          => 'Ver post Teste',
    'search_items'       => 'Pesquisar posts Testes'

  );

  // Argumentos para o tipo de postagem, a serem inseridos como 2º parâmetro()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Mantém os posts e seus dados',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'editor', 'custom-fields', 'thumbnail' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => 'teste'
  );
 
  // Chamando a função no Wordpress
  register_post_type( 'teste_gridmidia_cpt', $args);

}

//Criando campo para inserção de uma URL

			if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_622f771b78483',
	'title' => 'URL',
	'fields' => array(
		array(
			'key' => 'field_622f777c654ac',
			'label' => 'URL:',
			'name' => 'url:_',
			'type' => 'url',
			'instructions' => 'Insira aqui a URL',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'operator' => '',
						'value' => '',
					),
				),
			),
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://',
			'placeholder' => 'Insira aqui a URL',
		),
		array(
			'key' => 'field_622f7d488cf7b',
			'label' => '',
			'name' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'teste_gridmidia_cpt',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
));

endif;		

//Fim do plugin