<?php
$this->wf_latest_version_notice();

global $wp_version;
global $wpdb;
echo '<h3>'. esc_html__('Technical and server information', 'wonderflux') . '</h3>';
echo '<p>' . sprintf( esc_html__( 'Wonderflux version installed: %1$s, requires at-least WordPress v%2$s, optimised for WordPress v%3$s', 'wonderflux' ), WF_VERSION, WF_WORDPRESS_MIN, WF_WORDPRESS_OPTI ) . '</p>';
echo '<p>' . sprintf( esc_html__( 'WordPress version installed: %s', 'wonderflux' ), $wp_version ) . '</p>';
echo '<p>' . sprintf( esc_html__( 'PHP version installed: %s', 'wonderflux' ), phpversion() ) . '</p>';
echo '<p>' . sprintf( esc_html__( 'MySQL version installed: %s', 'wonderflux' ), $wpdb->db_version() ) . '</p>';

echo '<h3>' . esc_html__('Wonderflux contants you can use/define in your child theme', 'wonderflux') . '</h3>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_MAIN_DIR: %s', 'wonderflux' ), '<code>' . WF_MAIN_DIR . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_MAIN_URL: %s', 'wonderflux' ), '<code>' . WF_MAIN_URL . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_CONTENT_DIR: %s', 'wonderflux' ), '<code>' . WF_CONTENT_DIR . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_CONTENT_URL: %s', 'wonderflux' ), '<code>' . WF_CONTENT_URL . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_INCLUDES_DIR: %s', 'wonderflux' ), '<code>' . WF_INCLUDES_DIR . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_INCLUDES_URL: %s', 'wonderflux' ), '<code>' . WF_INCLUDES_URL . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_THEME_URL: %s', 'wonderflux' ), '<code>' . WF_THEME_URL . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_THEME_DIR: %s', 'wonderflux' ), '<code>' . WF_THEME_DIR . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_ADMIN_ACCESS: %s', 'wonderflux' ), '<code>' . WF_ADMIN_ACCESS . '</code>' ) . '</strong></p>';

echo '<h3>' . esc_html__('Other Wonderflux contants you can use in your child theme', 'wonderflux') . '</h3>';
echo '<p>' . esc_html__( 'Note that these only accept boolean values - true or false', 'wonderflux' ) . '</p>';
$fw_replace = ( WF_THEME_FRAMEWORK_REPLACE === true ) ? 'true' : 'false';
$fw_none = ( WF_THEME_FRAMEWORK_NONE === true ) ? 'true' : 'false';
$fw_debug = ( WF_DEBUG === true ) ? 'true' : 'false';
echo '<p><strong>' . sprintf( esc_html__( 'WF_THEME_FRAMEWORK_REPLACE: %s', 'wonderflux' ), '<code>' . $fw_replace . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_THEME_FRAMEWORK_NONE: %s', 'wonderflux' ), '<code>' . $fw_none . '</code>' ) . '</strong></p>';
echo '<p><strong>' . sprintf( esc_html__( 'WF_DEBUG: %s', 'wonderflux' ), '<code>' . $fw_debug . '</code>' ) . '</strong></p>';
?>