<?php

/**
 * Directors model config
 */

return array(
    'title' => 'Галереи',
    'single' => 'галерея',
    'model' => 'Gallery',

    'columns' => array(
//        'menu' => array(
//            'title' => 'Меню',
//            'relationship' => 'menu',
//            'select' => '(:table).title',
//        ),
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
			'relation' => 'photos',
			'select' => 'COUNT((:table).id)',
		),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),
    ),


    'filters' => array(
        'id',
        'title' => 'название',
    ),


    'edit_fields' => array(
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
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),

    ),



);