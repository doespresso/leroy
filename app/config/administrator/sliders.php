<?php

/**
 * Directors model config
 */

return array(
    'title' => 'Слайды',
    'single' => 'слайд',
    'model' => 'Slide',

    'columns' => array(
        'id' => 'id',
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
        'sort' => array(
            'type' => 'number',
            'decimals' => 0,
            'title' => 'Индекс сортировки',
        ),
//        'img' => array(
//            'title' => 'Картинка',
//            'output' => '<img src="/uploads/slider/published/(:value)"/>',
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
            'title' => 'Заголовок',
            'type'=>'text',
        ),
        'title_alt' => array(
            'title' => 'Заголовок ENG',
            'type'=>'text',
        ),
        'subtitle' => array(
            'title' => 'Подзаголовок',
            'type'=>'text',
        ),
        'subtitle_alt' => array(
            'title' => 'Подзаголовок ENG',
            'type'=>'text',
        ),
        'desc' => array(
            'title' => 'Короткое описание',
            'type' => 'text',
        ),
        'sort' => array(
            'type' => 'number',
            'title' => 'Индекс сортировки',
            'value' => '10'
        ),
        'desc_alt' => array(
            'title' => 'Короткое описание ENG',
            'type' => 'text',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'Опубликовано',
        ),
        'new' => array(
            'type' => 'bool',
            'title' => 'Ярлык NEW',
        ),
        'bg_color'=>array(
            'title'=>'Цвет фона',
            'type'=>'color',
        ),
        'light_bg' => array(
            'type' => 'bool',
            'title' => 'Сделать текст темным',
        ),
        'img' => array(
            'title' => 'Картинка',
            'type' => 'image',
            'location' => public_path() . '/uploads/sliders/originals/',
            'naming' => 'keep',
            'size_limit' => 7,
            'sizes' => array(
                array(1920, 1300, 'landscape', public_path() . '/uploads/sliders/published/', 75),
            )
        ),
        'link' => array(
            'title' => 'Ссылка на экшен',
            'type' => 'text',
        ),
        'link_text' => array(
            'title' => 'Текст кнопки',
            'type' => 'text',
        ),
    ),



);