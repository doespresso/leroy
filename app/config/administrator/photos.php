<?php

/**
 * Directors model config
 */

return array(
    'title' => 'Фото',
    'single' => 'фото',
    'model' => 'Photo',

    'columns' => array(

        'gallery_id' => array(
            'title' => 'Галерея',
            'relationship' => 'gallery',
            'select' => '(:table).title',
        ),
        'title' => array(
            'title' => 'Заголовок',
        ),
        'title_alt' => array(
            'title' => 'Заголовок ENG',
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
        'new' => array(
            'type' => 'bool',
            'title' => 'NEW',
        ),
//        'sort' => array(
//            'type' => 'number',
//            'decimals' => 0,
//            'title' => 'Индекс сортировки',
//        ),
        'img' => array(
            'title' => 'Фото',
            'output' => '<img src="/uploads/gallery/thumb/(:value)"/>',
        ),
    ),

    /**
     * The filter set
     */
    'filters' => array(
        'id',
        'title' => 'название',
        'gallery' => array(
            'title' => 'Галерея',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
    ),

    /**
     * The editable fields
     */
    'edit_fields' => array(
        'gallery' => array(
            'title' => 'Галерея',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
        'title' => array(
            'title' => 'Заголовок',
            'type'=>'text',
        ),
        'title_alt' => array(
            'title' => 'Заголовок ENG',
            'type'=>'text',
        ),
        'desc' => array(
            'title' => 'Короткое описание',
            'type' => 'text',
        ),
//        'sort' => array(
//            'type' => 'number',
//            'title' => 'Индекс сортировки',
//            'value' => '10'
//        ),
        'desc_alt' => array(
            'title' => 'Короткое описание ENG',
            'type' => 'text',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'Опубликовано',
            'value' => 1,
        ),
        'light_bg' => array(
            'type' => 'bool',
            'title' => 'Сделать содержание белым',
            'value' => 0,
        ),
        'img' => array(
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/gallery/originals/',
            'naming' => 'keep',
            'size_limit' => 7,
            'sizes' => array(
                array(1920, 1300, 'landscape', public_path() . '/uploads/gallery/big/', 75),
                array(100, 100, 'crop', public_path() . '/uploads/gallery/thumb/', 100),
            )
        ),
    ),



);