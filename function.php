<?php
function auto_enqueue_assets() {
    $css_path = get_template_directory() . '/assets/css/';
    $js_path = get_template_directory() . '/assets/js/';

    $css_files = scandir($css_path);
    $js_files = scandir($js_path);

    foreach ($css_files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'css') {
            wp_enqueue_style('custom-' . basename($file, '.css'), get_template_directory_uri() . '/assets/css/' . $file, array(), null, 'all');
        }
    }

    foreach ($js_files as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'js') {
            wp_enqueue_script('custom-' . basename($file, '.js'), get_template_directory_uri() . '/assets/js/' . $file, array(), null, true);
        }
    }
}

add_action('wp_enqueue_scripts', 'auto_enqueue_assets');
?>