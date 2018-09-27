<?php

$key = 'widget_related_articles';
$widgetplacement = self::$config['tab_placement'];
$post_types = self::$config['post_types'];

$widget_config = [
  'key' => $key,
  'name' => 'widget_related_articles',
  'label' => 'Related Articles',
  'display' => 'block',
  'sub_fields' => [
    [
      'key' => $key . '_basic_details_tab',
      'label' => 'Basic Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ],
    [
      'key' => $key . '_title',
      'label' => 'Title',
      'name' => 'title',
      'type' => 'text',
      'required' => 1,
      'default_value' => 'You may also like'
    ],
    [
      'key' => $key . '_posts',
      'label' => 'Posts',
      'name' => 'posts',
      'type' => 'repeater',
      'instructions' => 'Add a maximum of 7 posts',
      'layout' => 'row',
      'button_label' => 'Add post',
      'min' => 1,
      'max' => 4,
      'sub_fields' => [
        [
          'key' => $key . '_posts_manual',
          'label' => 'Post',
          'name' => 'post',
          'type' => 'post_object',
          'post_type' => $post_types,
          'multiple' => 0,
          'return_format' => 'object',
          'ui' => 1,
          'required' => 1
        ],
        [
          'key' => $key . '_post_title',
          'label' => 'Custom post title',
          'instructions' => 'Optional',
          'name' => 'post_title',
          'type' => 'text',
          'placeholder' => 'Defaults to original post title if empty'
        ],
      ]
    ],
    [
      'key' => $key . '_advanced_details_tab',
      'label' => 'Advanced Details',
      'type' => 'tab',
      'placement' => $widgetplacement,
    ]
  ],
];
$widget_config["content-types"] = get_option("options_" . $key . "_available_post_types");
$widget_config["content-sizes"] = array('main'); // main, main-full-bleed, sidebar
