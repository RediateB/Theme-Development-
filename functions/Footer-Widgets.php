<?php

// adding sidebar
function eduthemealulu_add_sidebar(){

    register_sidebar(
        array(
            'name'=> __("Footer Sidebar 1", 'eduthemealulu'),
            'id' => 'footer-sidebar-1',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'=> __("Footer Sidebar 2", 'eduthemealulu'),
            'id' => 'footer-sidebar-2',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'=> __("Footer Sidebar 3", 'eduthemealulu'),
            'id' => 'footer-sidebar-3',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );
}

add_action('widgets_init', 'eduthemealulu_add_sidebar');

?>