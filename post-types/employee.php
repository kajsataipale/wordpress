<?php
declare(strict_types=1);
add_action('init', function () {
    register_post_type('employee', [
        'has_archive' => true,
        'labels' => [
            'add_new_item' => __('Add New employee'),
            'edit_item' => __('Edit employee'),
            'name' => __('Employees'),
            'search_items' => __('Search employees'),
            'singular_name' => __('employee'),
        ],
        'menu_icon' => 'dashicons-groups',
        'menu_position' => 5,
        'public' => true,
    ]);
});
