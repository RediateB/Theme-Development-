<?php

// adding sidebar
function themetest_add_sidebar(){

    register_sidebar(
        array(
            'name'=> __("Left-Sidebar-1", 'themetest'),
            'id' => 'left-sidebar-1',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'=> __("Left Sidebar-2", 'themetest'),
            'id' => 'left-sidebar-2',
            'before_widget' => '<div>',
            'after_widget' => '<div>',
            'before_title' => '<h2 class="rounded">',
            'after_widget' => '</h2>',
        )
    );
}

add_action('widgets_init', 'themetest_add_sidebar');

?>