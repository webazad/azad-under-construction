<?php
/**
* Plugin Name: Azad Under Construction
* Plugin URI:  https://gittechs.com/plugins/azad-under-construction
* Description: Super easy to show comming soon page.
* Version:     0.0.0.1
* Author:      Md. Abul Kalam Azad
* Author URI:  https://gittechs.com/author
* License:     GPLv3
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/
defined( 'ABSPATH' ) || die( 'No script kiddies please!' );
function azad_under_construction(){
    if ( !is_user_logged_in()  ){
        // Path to custom coming soon page
        $template_path = plugin_dir_path(__FILE__).'inc/index.php';
        include($template_path);
        exit();
    }
}

function auc_skip_redirect(){
    global $currentpage;
    if('wp-login.php' == $currentpage){
        return;
    }else{
        add_action('template_redirect','azad_under_construction');
    }
}
add_action('init','auc_skip_redirect');
