<?php

function opticron_post_types() {
        register_post_type('Special Offers', array(
            'supports' => array('title','editor','excerpt'),
            'rewrite' => array('slug' => 'offers'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Special Offers',
                'add_new_item' => 'Add New Offer',
                'edit_item' => 'Edit Offer',
                'all_items' => 'All Offers',
                'singular_name' => 'Offer'
            ),
            'menu_icon' => 'dashicons-star-filled'
        ));
        register_post_type('Product Categories', array(
            'supports' => array('title','editor'),
            'rewrite' => array('slug' => 'offers'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Product Categories',
                'add_new_item' => 'Add New Category',
                'edit_item' => 'Edit Category',
                'all_items' => 'All Categories',
                'singular_name' => 'Category'
            ),
            'menu_icon' => 'dashicons-portfolio'
        ));
    }

    add_action('init', 'opticron_post_types');