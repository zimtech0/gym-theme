<?php 

//creates the menus
function gymTheme_menus(){
    //wp function to add menu to :Appearance=>Menus, admin section
    register_nav_menus(array(
        'main-menu' => " Main Menu"
    ));
}

//hook custom function into wp built in "init" function
add_action('init','gymTheme_menus');


//add stylesheets and js files
function gymTheme_scripts(){


    //normalize css , reset css

    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(),  '8.0.1');

}


//hook funtion into wp
add_action('wp_enqueue_scripts','gymTheme_scripts');

