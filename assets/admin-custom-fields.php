<?php

//add admin theme panel 
function l2_add_admin_page()
{
    //First level
    add_menu_page('Theme options', 'Level2', 'manage_options', 'page_l2', 'l2_theme_create_page', get_template_directory_uri().'/img/icons/admin-icon.png', 61 );

    //second level create submenu page with same 
    //add_submenu_page('page_l2', 'Nerya Theme options', 'settings', 'manage_options', 'page_l2', 'nerya_theme_create_page' );
    //add_submenu_page('page_l2', 'Nerya css option', 'custom css', 'manage_options', 'page_l2_css', 'nerya_theme_css_page' );

}
 
add_action('admin_menu', 'l2_add_admin_page');
add_action('admin_init', 'l2_settings');

function l2_settings()
{
    register_setting('l2-settings-group','l2_maintenance');
    register_setting('l2-settings-group','l2_adresse');
    register_setting('l2-settings-group','l2_tel');
    register_setting('l2-settings-group','l2_mail');
    register_setting('l2-settings-group','l2_linkedin');
    register_setting('l2-settings-group','l2_facebook');
    register_setting('l2-settings-group','l2_twitter');
    register_setting('l2-settings-group','l2_instagram');

    add_settings_section('l2-sidebar-options','Options de base', 'l2_sidebar_options' ,'page_l2');
    add_settings_section('l2-sidebar-social','Réseaux sociaux', 'l2_sidebar_social' ,'page_l2');



    add_settings_field('sidebar-maintenance','Mode maintenance','l2_sidebar_maintenance','page_l2','l2-sidebar-options');
    add_settings_field('sidebar-adresse','Adresse','l2_sidebar_adresse','page_l2','l2-sidebar-options');
    add_settings_field('sidebar-tel','Tel','l2_sidebar_tel','page_l2','l2-sidebar-options');
    add_settings_field('sidebar-mail','E-mail','l2_sidebar_mail','page_l2','l2-sidebar-options');


     add_settings_field('sidebar-linkedin','Linkedin','l2_sidebar_social_linkedin','page_l2','l2-sidebar-social');
    add_settings_field( 'sidebar-facebook', 'Facebook', 'l2_sidebar_social_facebook', 'page_l2', 'l2-sidebar-social' );
    add_settings_field( 'sidebar-twitter', 'Twitter', 'l2_sidebar_social_twitter', 'page_l2', 'l2-sidebar-social' );
    add_settings_field( 'sidebar-instagram', 'Instagram', 'l2_sidebar_social_instagram', 'page_l2', 'l2-sidebar-social' );

}

function l2_sidebar_options()
{
    echo 'Information de base';
}

function l2_sidebar_social()
{
    echo 'Liens vers les réseaux sociaux';
}

if($ismaintenance === '1'){
    add_action('get_header', 'modeMaintenance');// activer si on veut le mode maintenance
}

function l2_sidebar_maintenance()
{
    $maintenance = esc_attr(get_option( 'l2_maintenance' ));  
    echo ' <input type="checkbox" name="l2_maintenance" value="1"' . checked( 1, $maintenance, false ) . '/>';

}
function l2_sidebar_adresse()
{
    $adresse = esc_attr(get_option( 'l2_adresse' ));
    echo '<input type="text" name="l2_adresse" value="'.$adresse.'" class="regular-text" placeholder="Adresse de société" />';
}
function l2_sidebar_tel()
{
    $tel = esc_attr(get_option( 'l2_tel' ));
    echo '<input type="text" name="l2_tel" value="'.$tel.'" class="regular-text" placeholder="Telephone" />';
}

function l2_sidebar_mail()
{
    $mail = esc_attr(get_option( 'l2_mail' ));
    echo '<input type="text" name="l2_mail" value="'.$mail.'" class="regular-text" placeholder="Email" />';
}

function l2_sidebar_social_linkedin()
{
    $linkedin = esc_attr(get_option( 'l2_linkedin' ));
    echo '<input type="text" name="l2_linkedin" value="'.$linkedin.'" class="regular-text" placeholder="Lien profil LinkedIn" /> ';
}

function l2_sidebar_social_facebook()
{
    $facebook = esc_attr(get_option( 'l2_facebook' ));
    echo '<input type="text" name="l2_facebook" value="'.$facebook.'" class="regular-text" placeholder="Lien profil Facebook" />';
}
function l2_sidebar_social_twitter()
{
    $twitter = esc_attr(get_option( 'l2_twitter' ));
    echo '<input type="text" name="l2_twitter" value="'.$twitter.'" class="regular-text" placeholder="Lien profil Twitter" />';
}
function l2_sidebar_social_instagram()
{
    $instagram = esc_attr(get_option( 'l2_instagram' ));
    echo '<input type="text" name="l2_instagram" value="'.$instagram.'" class="regular-text" placeholder="Lien profil Instagram" />';
}
 function l2_theme_create_page()
 {
    //generation of admin page
    require_once get_template_directory().'/admin/admin.php';
 }


// [info type="tel"] shortcode to display custom field
function bartag_func( $atts )
{
    $a = shortcode_atts( array(
        'type' => 'tel'
        ), $atts );
    $value = 'l2_'.$atts['type'];

    return esc_attr(get_option( 'l2_'.$a['type'] ));
}
add_shortcode( 'info', 'bartag_func' );