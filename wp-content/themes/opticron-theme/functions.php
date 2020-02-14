<?php

    function enqueue_load_fa() {
        wp_enqueue_style('load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    }

    add_action('wp_enqueue_scripts', 'enqueue_load_fa');

    function add_google_fonts() {
        wp_enqueue_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Inconsolata|Noto+Sans|Noto+Serif|Nunito|Open+Sans|Roboto|Source+Sans+Pro&display=swap' , false);
    }

    add_action('wp_enqueue_scripts', 'add_google_fonts');