<?php

/**
 * Directors model config
 */

return array(
    'title' => 'Меню',
    'single' => 'меню',
    'model' => 'Menu',

    'columns' => array(
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
		'num_cats' => array(
			'title' => '# cats',
			'relation' => 'cats',
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
//        'img' => array(
//            'title' => 'Фото',
////            'output' => '<img src="/uploads/afisha/croped/(:value)"/>',
//        ),
//        'video' => array(
//            'title' => 'Видео',
//            'type'=>'file',
////            'location' => public_path() . '/uploads/afisha/videos/',
////            'naming' => 'random',
////            'length' => 20,
////            'size_limit' => 30,
//////            'mimes' => 'pdf,psd,doc',
//        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'title' => 'название',
    ),

    /**
     * The editable fields
     */
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
        'svg' => array(
            'title' => 'SVG code',
            'type' => 'textarea',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),
//        'img' => array(
//            'title' => 'Картинка',
//            'type' => 'image',
//            'location' => public_path() . '/uploads/afisha/originals/',
//            'naming' => 'random',
////            'length' => 30,
//            'size_limit' => 3,
//            'sizes' => array(
//                array(1920, 1300, 'landscape', public_path() . '/uploads/afisha/big/', 100),
//                array(640, 480, 'fit', public_path() . '/uploads/afisha/thumb/', 100),
//                array(320, 320, 'crop', public_path() . '/uploads/afisha/croped/', 100),
//                array(120, 120, 'crop', public_path() . '/uploads/afisha/croped_small/', 100)
//            )
//        ),
//        'video' => array(
//            'title' => 'Видео',
//            'type'=>'file',
//            'location' => public_path() . '/uploads/afisha/videos/',
//            'naming' => 'random',
//            'length' => 20,
//            'size_limit' => 30,
////            'mimes' => 'pdf,psd,doc',
//        ),
//		'salary' => array(
//			'title' => 'Salary',
//			'type' => 'number',
//			'symbol' => '$',
//			'decimals' => 2
//		),
    ),



);