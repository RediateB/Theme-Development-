<?php

// adding sidebar
function EduTheme_add_sidebar(){

    register_sidebar(
        array(
            'name'=> __("Footer Sidebar 1", 'EduTheme'),
            'id' => 'footer-sidebar-1',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'=> __("Footer Sidebar 2", 'EduTheme'),
            'id' => 'footer-sidebar-2',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'=> __("Footer Sidebar 3", 'EduTheme'),
            'id' => 'footer-sidebar-3',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );
}

add_action('widgets_init', 'EduTheme_add_sidebar');

?>