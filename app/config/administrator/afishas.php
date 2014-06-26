<?php

/**
 * Directors model config
 */

return array(

    'title' => 'Концерты',

    'single' => 'концерт',

    'model' => 'Afisha',

    'columns' => array(
        'title' => array(
            'title' => 'Название',
        ),
        'short' => array(
            'title' => 'Короткое описание',
            'type' => 'text',
        ),
        'day' => array(
            'title' => 'Дата мероприятия',
            'sort_field' => 'salary'
        ),
//		'num_films' => array(
//			'title' => '# films',
//			'relation' => 'films',
//			'select' => 'COUNT((:table).id)',
//		),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),
        'img' => array(
            'title' => 'Фото',
//            'output' => '<img src="/uploads/afisha/croped/(:value)"/>',
        ),
        'video' => array(
            'title' => 'Видео',
            'type'=>'file',
//            'location' => public_path() . '/uploads/afisha/videos/',
//            'naming' => 'random',
//            'length' => 20,
//            'size_limit' => 30,
////            'mimes' => 'pdf,psd,doc',
        ),
    ),

    /**
     * The filter set
     */
//    'filters' => array(
////        'id',
////        'title' => 'название',
////        'day' => array(
////            'title' => 'Дата мероприятия',
////            'sort_field' => 'salary'
////        ),
////		'salary' => array(
////			'type' => 'number',
////			'symbol' => '$',
////			'decimals' => 2,
////		),
////		'created_at' => array(
////			'type' => 'datetime'
////		),
//    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'title' => array(
            'title' => 'название',
        ),
        'short' => array(
            'title' => 'Короткое описание',
            'type' => 'text',
        ),
        'day' => array(
            'title' => 'дата мероприятия',
            'type' => 'datetime',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),
        'img' => array(
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/afisha/originals/',
            'naming' => 'random',
//            'length' => 30,
            'size_limit' => 3,
            'sizes' => array(
                array(1920, 1300, 'landscape', public_path() . '/uploads/afisha/big/', 100),
                array(640, 480, 'fit', public_path() . '/uploads/afisha/thumb/', 100),
                array(320, 320, 'crop', public_path() . '/uploads/afisha/croped/', 100),
                array(120, 120, 'crop', public_path() . '/uploads/afisha/croped_small/', 100)
            )
        ),
        'video' => array(
            'title' => 'Видео',
            'type'=>'file',
            'location' => public_path() . '/uploads/afisha/videos/',
            'naming' => 'random',
            'length' => 20,
            'size_limit' => 30,
//            'mimes' => 'pdf,psd,doc',
        ),
//		'salary' => array(
//			'title' => 'Salary',
//			'type' => 'number',
//			'symbol' => '$',
//			'decimals' => 2
//		),
    ),



);