<?php
function zoo_acf_mataboxes(){

    //start animals
    acf_add_local_field_group(array(
        'key' => 'acf_animal_settings',
        'title' => 'Допонительные поля для животных',
        'fields' => array(
            array(
                'key' => 'animal_title_en',
                'label' => 'Заголовок на англиском',
                'name' => 'animal_title_en',
                'type' => 'text',
                'instructions' => 'Введите текст',
                'placeholder' => 'en',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),           
            array(
                'key' => 'animal_title_lat',
                'label' => 'Заголовок на латыни',
                'name' => 'animal_title_lat',
                'type' => 'text',
                'instructions' => 'Введите текс',
                'placeholder' => 'lat',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),           
            array(
                'key' => 'animal_class',
                'label' => 'Класс животного',
                'name' => 'animal_class',
                'type' => 'text',
                'instructions' => 'Введите текс',
                'placeholder' => 'класс',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
            array(
                'key' => 'animal_squad',
                'label' => 'Отряд животного',
                'name' => 'animal_squad',
                'type' => 'text',
                'instructions' => 'Введите текс',
                'placeholder' => 'отряд',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
            array(
                'key' => 'animal_family',
                'label' => 'Семейство животного',
                'name' => 'animal_family',
                'type' => 'text',
                'instructions' => 'Введите текс',
                'placeholder' => 'семейство',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
            array(
                'key' => 'animal_genus',
                'label' => 'Род животного',
                'name' => 'animal_genus',
                'type' => 'text',
                'instructions' => 'Введите текс',
                'placeholder' => 'род',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
            array(
                'key' => 'animal_kind',
                'label' => 'Вид животного',
                'name' => 'animal_kind',
                'type' => 'text',
                'instructions' => 'Введите текс',
                'placeholder' => 'вид',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
        ),

        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'animals',
                )
            )
        ),
    ));
    //end animals



    //start BANER
    acf_add_local_field_group(array(
        'key' => 'acf_banner_settings',
        'title' => 'Допонительные поля для слайдера',
        'fields' => array(
            array(
                'key' => 'banner_title',
                'label' => 'Заголовок',
                'name' => 'banner_title',
                'type' => 'text',
                'instructions' => 'Введите текст',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
            array(
                'key' => 'banner_text',
                'label' => 'Текст',
                'name' => 'banner_text',
                'type' => 'text',
                'instructions' => 'Введите текст',
                'wrapper' => array (
                    'width' => '35',
                ),
            ),           
            array(
                'key' => 'banner_text_button',
                'label' => 'Текст кнопки',
                'name' => 'banner_text_button',
                'type' => 'text',
                'instructions' => 'Введите текст',
                'wrapper' => array (
                    'width' => '20',
                ),
            ),           
            array(
                'key' => 'banner_link_button',
                'label' => 'Адрес ссылки',
                'name' => 'banner_link_button',
                'type' => 'text',
                'instructions' => 'Введите адрес ссылки',
                'wrapper' => array (
                    'width' => '25',
                ),
            ),           
            array(
                'key' => 'banner_boolean',
                'label' => 'Затемнять фон?',
                'name' => 'banner_boolean',
                'type' => 'true_false',
                'wrapper' => array (
                    'width' => '100',
                ),
            ),           
       
        ),

        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'banner',
                )
            )
        ),
    ));
    //end BANER  



    //start MORE
    acf_add_local_field_group(array(
        'key' => 'acf_more_settings',
        'title' => 'Настройки блока посетителя',
        'fields' => array(
            array(
                'key' => 'more_link',
                'label' => 'Адрес ссылки',
                'name' => 'more_link',
                'type' => 'text',
                'instructions' => 'Введите адрес ссылки',
                'wrapper' => array (
                    'width' => '100',
                ),
            ),        
       
        ),

        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'more',
                )
            )
        ),
    ));
    //end MORE  




    //start TUTELAGE
    acf_add_local_field_group(array(
        'key' => 'acf_tutelage_settings',
        'title' => ' Дополнительные поля блока опеки',
        'fields' => array(
            array(
                'key' => 'tutelage_link',
                'label' => 'Адрес ссылки',
                'name' => 'tutelage_link',
                'type' => 'text',
                'instructions' => 'Введите адрес ссылки',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),
            array(
                'key' => 'tutelage_logo_company',
                'name' => 'tutelage_logo_company',
                'label' => 'Поле с выбором логотипа компании',
                'instructions' => 'Фото должно быть в формете png, размер 200*40 px',
                'default_value' => '',
                'type' => 'image',
                'wrapper' => array (
                    'width' => '50',
                ),
            ),       
        ),

        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'tutelage',
                )
            )
        ),
    ));
    //end TUTELAGE
}
add_action('acf/init', 'zoo_acf_mataboxes');
