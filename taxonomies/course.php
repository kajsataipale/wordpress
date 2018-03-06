<?php
declare(strict_types=1);
add_action('init', function () {
    register_taxonomy('course', ['student'], [
        'hierarchical' => true,
        'labels' => [
            'add_new_item' => __('Add New Course'),
            'edit_item' => __('Edit Course'),
            'name' => __('Courses'),
            'search_items' => __('Search Courses'),
            'singular_name' => __('Course'),
        ],
        'query_var' => true,
        'rewrite' => ['slug' => 'course'],
        'show_admin_column' => true,
        'show_ui' => true,
    ]);
});
