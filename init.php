<?php
/*
    Plugin Name: Scroll Top
    Plugin URI: https://demo.showkatsumon.com
    Author: Showkat Sumon
    Author URI: https://showkatsumon.com
    description: This is only for test.
    version: 1.0
*/

add_action('wp_enqueue_scripts' , 'scripts_call');
function scripts_call(){
    wp_enqueue_style('my_font' , PLUGINS_URL('css/font-awesome.min.css', __FILE__));

    wp_enqueue_style('custom' , PLUGINS_URL('css/custom.css', __FILE__));

    wp_enqueue_script('custom-js', PLUGINS_URL('js/custom.js' , __FILE__), array('jquery'), '' , false);
}

add_action('wp_footer' , 'text_test');
function text_test(){?>

    <div class="scroll-top">
        <a href="#"><i class="fa fa-arrow-circle-up"></i></a>
    </div>

<?php }