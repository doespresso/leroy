<?php

/**
 * Directors model config
 */

return array(
    'title' => 'Категории меню',
    'single' => 'категория',
    'model' => 'Cat',

    'columns' => array(
        'menu' => array(
            'title' => 'Меню',
            'relationship' => 'menu',
            'select' => '(:table).title',
        ),
        'id' => 'id',
        'title' => array(
            'title' => 'Название',
        ),
        'title_alt' => array(
            'title' => 'Название ENG',
        ),
        'desc' => array(
            'title' => 'Короткое описание',
            'type' => 'text',
        ),
        'desc_alt' => array(
            'title' => 'Короткое описание ENG',
            'type' => 'text',
        ),
		'num_items' => array(
			'title' => '# items',
			'relation' => 'items',
			'select' => 'COUNT((:table).id)',
		),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),
        'new' => array(
            'type' => 'bool',
            'title' => 'NEW',
        ),
    ),


    'filters' => array(
        'id',
        'title' => 'название',
        'menu' => array(
            'title' => 'Меню',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
    ),


    'edit_fields' => array(
        'menu' => array(
            'title' => 'Меню',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
        'title' => array(
            'title' => 'Название',
        ),
        'title_alt' => array(
            'title' => 'Название ENG',
        ),
        'desc' => array(
            'title' => 'Короткое описание',
            'type' => 'text',
        ),
        'desc_alt' => array(
            'title' => 'Короткое описание ENG',
            'type' => 'text',
        ),
        'new' => array(
            'type' => 'bool',
            'title' => 'NEW',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),


    ),



);