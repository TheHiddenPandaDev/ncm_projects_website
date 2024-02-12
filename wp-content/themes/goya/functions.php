<?php

// Normal Pages ID
const METODO_PAGE_ID = 9;
const HOME_PAGE_ID = 11;
const NOSOTROS_PAGE_ID = 13;
const SOLUCIONES_PAGE_ID = 15;

// Duraluxe Pages ID
const DURALUXE_HOME_PAGE_ID = 26;
const DURALUXE_ACABADOS_PAGE_ID = 28;
const DURALUXE_ACABADOS_BRILLANTE_PAGE_ID = 30;
const DURALUXE_ACABADOS_CANVAS_PAGE_ID = 33;
const DURALUXE_ACABADOS_CEPILLADO_PAGE_ID = 35;
const DURALUXE_ACABADOS_GLOW_PAGE_ID = 37;
const DURALUXE_ACABADOS_ICETOUCH_PAGE_ID = 39;
const DURALUXE_ACABADOS_MATE_PAGE_ID = 41;
const DURALUXE_ACABADOS_SALTLAKE_PAGE_ID = 43;
const DURALUXE_ACABADOS_SATINADO_PAGE_ID = 45;
const DURALUXE_ACABADOS_WALLSKY_PAGE_ID = 47;
const DURALUXE_CONTACTO_PAGE_ID = 49;
const DURALUXE_HISTORIA_PAGE_ID = 51;
const DURALUXE_MERCADOS_PAGE_ID = 53;
const DURALUXE_MISION_PAGE_ID = 55;
const DURALUXE_PORQUE_PAGE_ID = 57;
const DURALUXE_SOPORTE_PAGE_ID = 60;
const DURALUXE_SOPORTE_CATALOGO_PAGE_ID = 62;


add_filter( 'pages_in_duraluxe_section', 'pages_in_duraluxe_section' );
add_filter( 'pages_in_acabados_section', 'pages_in_acabados_section' );
add_filter( 'pages_in_soporte_section', 'pages_in_soporte_section' );

function pages_in_duraluxe_section( $arg = '' ): array
{
    return [
        DURALUXE_HOME_PAGE_ID,
        DURALUXE_ACABADOS_PAGE_ID,
        DURALUXE_ACABADOS_BRILLANTE_PAGE_ID,
        DURALUXE_ACABADOS_CANVAS_PAGE_ID,
        DURALUXE_ACABADOS_CEPILLADO_PAGE_ID,
        DURALUXE_ACABADOS_GLOW_PAGE_ID,
        DURALUXE_ACABADOS_ICETOUCH_PAGE_ID,
        DURALUXE_ACABADOS_MATE_PAGE_ID,
        DURALUXE_ACABADOS_SALTLAKE_PAGE_ID,
        DURALUXE_ACABADOS_SATINADO_PAGE_ID,
        DURALUXE_ACABADOS_WALLSKY_PAGE_ID,
        DURALUXE_CONTACTO_PAGE_ID,
        DURALUXE_HISTORIA_PAGE_ID,
        DURALUXE_MERCADOS_PAGE_ID,
        DURALUXE_MISION_PAGE_ID,
        DURALUXE_PORQUE_PAGE_ID,
        DURALUXE_SOPORTE_PAGE_ID,
        DURALUXE_SOPORTE_CATALOGO_PAGE_ID,
    ];
}

function pages_in_acabados_section( $arg = '' ): array
{
    return [
        DURALUXE_ACABADOS_PAGE_ID,
        DURALUXE_ACABADOS_BRILLANTE_PAGE_ID,
        DURALUXE_ACABADOS_CANVAS_PAGE_ID,
        DURALUXE_ACABADOS_CEPILLADO_PAGE_ID,
        DURALUXE_ACABADOS_GLOW_PAGE_ID,
        DURALUXE_ACABADOS_ICETOUCH_PAGE_ID,
        DURALUXE_ACABADOS_MATE_PAGE_ID,
        DURALUXE_ACABADOS_SALTLAKE_PAGE_ID,
        DURALUXE_ACABADOS_SATINADO_PAGE_ID,
        DURALUXE_ACABADOS_WALLSKY_PAGE_ID,
    ];
}

function pages_in_soporte_section( $arg = '' ): array
{
    return [
        DURALUXE_SOPORTE_PAGE_ID,
        DURALUXE_SOPORTE_CATALOGO_PAGE_ID,
    ];
}

/**
 * Goya functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Goya
 */

/*
function asdds_disable_default_runner() {
  if ( class_exists( 'ActionScheduler' ) ) {
    remove_action( 'action_scheduler_run_queue', array( ActionScheduler::runner(), 'run' ) );
  }
}
add_action( 'init', 'asdds_disable_default_runner', 10 );
*/

// Constants: Folder directories/uri's
define( 'GOYA_THEME_DIR', get_template_directory() );
define( 'GOYA_DIR', get_template_directory() . '/inc' );
define( 'GOYA_THEME_URI', get_template_directory_uri() );
define( 'GOYA_URI', get_template_directory_uri() . '/inc' );

// Constant: Framework namespace
define( 'GOYA_NAMESPACE', 'goya' );

// Constant: Theme version
define( 'GOYA_THEME_VERSION', '1.0.6.6' );


// Theme setup
if (! apply_filters('goya_disable_setup_wizard', false) == true) {

  // TGM Plugin Activation Class
  require GOYA_DIR .'/admin/plugins/plugins.php';

  // Imports
  require GOYA_DIR .'/admin/imports/import.php';

  // Theme Wizard
  require_once get_parent_theme_file_path( '/inc/merlin/vendor/autoload.php' );
  require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
  require_once get_parent_theme_file_path( '/inc/admin/setup/merlin-config.php' );
  require_once get_parent_theme_file_path( '/inc/admin/setup/merlin-filters.php' );

}

// Frontend Functions
require GOYA_DIR .'/misc.php';
require GOYA_DIR .'/frontend/header.php';
require GOYA_DIR .'/frontend/footer.php';
require GOYA_DIR .'/frontend/panels.php';
require GOYA_DIR .'/frontend/entry.php';

// Script Calls
require GOYA_DIR .'/script-calls.php';

// Ajax
require GOYA_DIR .'/ajax.php';

// Add Menu Support
require GOYA_DIR .'/mega-menu.php';

// Enable Sidebars
require GOYA_DIR .'/sidebar.php';

// Language/Currency switchers
require GOYA_DIR .'/switchers.php';

// WooCommerce related functions
require GOYA_DIR .'/woocommerce/wc-functions.php';
require GOYA_DIR .'/woocommerce/wc-elements.php';
require GOYA_DIR .'/woocommerce/category-image.php';

// Gutenberg related functions
require GOYA_DIR .'/gutenberg.php';

// CSS Output of Theme Options
require GOYA_DIR .'/custom-styles.php';

// Kirki: Load Config options
require GOYA_DIR .'/admin/settings/kirki.config.php';