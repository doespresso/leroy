<?php

/**
 * Directors model config
 */

return array(
    'title' => 'Разделы',
    'single' => 'раздел',
    'model' => 'Page',

    'columns' => array(
        'id' => 'id',
        'title' => array(
            'title' => 'Заголовок',
        ),
        'title_alt' => array(
            'title' => 'Заголовок ENG',
        ),
        'gallery' => array(
            'title' => 'Фотогалерея',
            'relationship' => 'gallery',
            'select' => '(:table).title',
        ),
        'alias' => array(
            'title' => 'Alias',
        ),
        'desc' => array(
            'title' => 'Текст',
            'type' => 'text',
        ),
        'desc_alt' => array(
            'title' => 'Текст ENG',
            'type' => 'text',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'опубликовано',
        ),
        'sort' => array(
            'type' => 'number',
            'decimals' => 0,
            'title' => 'Индекс сортировки',
        ),
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
        'gallery' => array(
            'title' => 'Галерея',
            'type' => 'relationship',
            'name_field' => 'title',
        ),
        'alias' => array(
            'title' => 'Alias',
            'type'=>'text',
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
            'title' => 'Текст',
            'type' => 'wysiwyg',
        ),
        'desc_alt' => array(
            'title' => 'Текст ENG',
            'type' => 'wysiwyg',
        ),
        'active' => array(
            'type' => 'bool',
            'title' => 'Опубликовано',
        ),
        'showaddress' => array(
            'type' => 'bool',
            'title' => 'Показать контакты',
        ),
        'showqr' => array(
            'type' => 'bool',
            'title' => 'Показать QR-code',
        ),
        'showsocial' => array(
            'type' => 'bool',
            'title' => 'Показать социальщину',
        ),
        'showbtn' => array(
            'type' => 'bool',
            'title' => 'Показать кнопку',
        ),
        'btn_text' => array(
            'title' => 'Текст кнопки',
            'type'=>'text',
        ),
        'btn_link' => array(
            'title' => 'Ссылка кнопки',
            'type'=>'text',
        ),
        'sort' => array(
            'type' => 'number',
            'title' => 'Индекс сортировки',
            'value' => '10'
        ),
        'bgcolor'=>array(
            'title'=>'Цвет фона',
            'type'=>'color',
        ),
        'active_html' => array(
            'title' => 'Код элемента интерактивной подложки',
            'type' => 'textarea',
        ),
        'show_video' => array(
            'type' => 'bool',
            'title' => 'Показать videobackground',
        ),
        'video_mp4' => array(
            'title' => 'Файл .mp4',
            'type' => 'file',
            'location' => public_path() . '/uploads/video/',
            'naming' => 'keep',
            'size_limit' => 7,
        ),
        'video_webm' => array(
            'title' => 'Файл .webm',
            'type' => 'file',
            'location' => public_path() . '/uploads/video/',
            'naming' => 'keep',
            'size_limit' => 7,
        ),
    ),



);