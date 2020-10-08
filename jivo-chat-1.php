<?php
/*
 * Plugin name: jivo-chat
 * Version: 1.0
 */
function add_async_attribute($tag, $handle) {
    $scripts_to_async = array('jivosite');

    foreach($scripts_to_async as $async_script) {
        if ($async_script === $handle) {
            return str_replace(' src', ' async src', $tag);
        }
    }
    return $tag;
}

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

function wp_jivosite() {
//    wp_enqueue_script( 'jivosite', '//code-ya.jivosite.com/widget/********', array(), null);
    wp_enqueue_script( 'jivosite', '//code-ya.jivosite.com/widget/********', array(), null, true);

}
add_action('wp_enqueue_scripts', 'wp_jivosite');
