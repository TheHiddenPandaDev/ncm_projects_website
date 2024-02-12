<?php
/**
 * Template file for displaying default header
 *
 * @package Goya
 */

$wp_logo_id = get_theme_mod( 'custom_logo' ); // Default WordPress Customizer option

$logo = get_theme_mod( 'site_logo', get_template_directory_uri() . '/assets/img/logo-light.png' );
$logo_dark = get_theme_mod( 'site_logo_dark', get_template_directory_uri() . '/assets/img/logo-dark.png' );
$logo_alt = get_theme_mod( 'site_logo_alt', '' );

// Logo
if ( !empty( $wp_logo_id ) ) {
    $image = wp_get_attachment_image_src( $wp_logo_id , 'full' );
    $logo = $image[0];
}

// Dark Scheme Logo
if ( empty($logo_dark) ) {
    $logo_dark = $logo;
}

// Alternative Logo
$logo_alt_class =  get_theme_mod( 'site_logo_alt_use', '' );


?>

<header id="header" class="<?php echo esc_attr( implode( ' ', (array) apply_filters( 'goya_header_class', array() ) ) ); ?>">

    <div data-animation="over-right" class="navbar w-nav" data-easing2="ease-in-out-quart" data-easing="ease-in-out-quart" data-collapse="medium" role="banner" data-no-scroll="1" data-duration="500" data-doc-height="1">
        <div class="w-embed">
            <style>
                .big-number {
                    /* Prefix required. Even Firefox only supports the -webkit- prefix */
                    -webkit-text-stroke-width: 3px;
                    -webkit-text-stroke-color: #e0004d;
                }

                .othercss {
                    -webkit-backdrop-filter: saturate(180%) blur(20px);
                    backdrop-filter: saturate(180%) blur(20px);
                }
            </style>
        </div>
        <div class="container w-container">
            <div class="navbar-warp">
                <a href="<?php echo get_home_url(); ?>" aria-current="page" class="brand w-nav-brand w--current"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Logo.svg" loading="lazy" width="170" alt="" class="image"></a>
                <nav role="navigation" class="nav-menu w-nav-menu">
                    <a href="<?php echo get_permalink(SOLUCIONES_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == SOLUCIONES_PAGE_ID) echo 'w--current'; ?>">Soluciones</a>
                    <a href="<?php echo get_permalink(METODO_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == METODO_PAGE_ID) echo 'w--current'; ?>">Método</a>
                    <a href="<?php echo get_permalink(NOSOTROS_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == NOSOTROS_PAGE_ID) echo 'w--current'; ?>">Nosotros</a>
                    <a href="duraluxe" class="nav-link w-nav-link">Duraluxe</a>
                    <div class="header-right-items header-items">
                        <ul class="account-links et-header-menu">
                            <li class="menu-item-has-children">
                                <a href="http://localhost/ncm/my-account/" class="et-menu-account-btn icon account-text"><span class="icon-text">My account</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></a>
                                <ul class="sub-menu">
                                    <li class="account-link--dashboard menu-item">
                                        <a href="http://localhost/ncm/my-account/">Dashboard</a>
                                    </li>
                                    <li class="account-link--orders menu-item">
                                        <a href="http://localhost/ncm/my-account/orders/">Orders</a>
                                    </li>
                                    <li class="account-link--downloads menu-item">
                                        <a href="http://localhost/ncm/my-account/downloads/">Downloads</a>
                                    </li>
                                    <li class="account-link--edit-address menu-item">
                                        <a href="http://localhost/ncm/my-account/edit-address/">Addresses</a>
                                    </li>
                                    <li class="account-link--edit-account menu-item">
                                        <a href="http://localhost/ncm/my-account/edit-account/">Account details</a>
                                    </li>
                                    <li class="account-link--customer-logout menu-item">
                                        <a href="http://localhost/ncm/my-account/customer-logout/?_wpnonce=211512d1cd">Log out</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?php
                            $cart_count = apply_filters( 'goya_cart_count', is_object( WC()->cart ) ? WC()->cart->cart_contents_count : 0 );
                            $count_class = ( $cart_count > 0 ) ? '' : ' et-count-zero';
                        ?>
                        <a data-target="open-cart" href="<?php echo esc_url(wc_get_cart_url()); ?>" title="<?php esc_attr_e('Cart', 'woocommerce' ); ?>" class="quick_cart icon">
                            <span class="text">Carrito</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                            <span class="item-counter minicart-counter<?php echo esc_attr( $count_class ); ?>"><?php echo esc_html($cart_count); ?></span>
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
        </div>
    </div>

    <?php if(in_array(get_the_ID(), apply_filters( 'pages_in_duraluxe_section', '' ))){ ?>
        <div class="duraluxe-menu-button w-nav-button-duraluxe" style="-webkit-user-select: text;" aria-label="menu" role="button" tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
            <div class="w-icon-nav-menu"></div>
        </div>
        <div class="duraluxe-menu">
            <div class="container w-container">
                <nav role="secondary-navigation" class="">
                    <a href="<?php echo get_permalink(DURALUXE_MISION_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == DURALUXE_MISION_PAGE_ID) echo 'w--current'; ?>">Misión</a>
                    <a href="<?php echo get_permalink(DURALUXE_ACABADOS_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(in_array(get_the_ID(), apply_filters( 'pages_in_acabados_section', '' ))) echo 'w--current'; ?>">Acabados</a>
                    <a href="<?php echo get_permalink(DURALUXE_HISTORIA_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == DURALUXE_HISTORIA_PAGE_ID) echo 'w--current'; ?>">Historia</a>
                    <a href="<?php echo get_permalink(DURALUXE_MERCADOS_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == DURALUXE_MERCADOS_PAGE_ID) echo 'w--current'; ?>">Mercados</a>
                    <a href="<?php echo get_permalink(DURALUXE_PORQUE_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == DURALUXE_PORQUE_PAGE_ID) echo 'w--current'; ?>">Porque</a>
                    <div class="dropdown nav-link w-nav-lin <?php if(in_array(get_the_ID(), apply_filters( 'pages_in_soporte_section', '' ))) echo 'w--current'; ?>">
                        <span class="nav-link">
                            Soporte
                            <i class="fa-solid fa-caret-down"></i>
                        </span>
                        <div class="sub-menu">
                            <ul>
                                <li><a href="<?php echo get_permalink(DURALUXE_SOPORTE_PAGE_ID); ?>" class="nav-link">Manual de uso</a></li>
                                <li><a href="<?php echo get_permalink(DURALUXE_SOPORTE_CATALOGO_PAGE_ID); ?>" class="nav-link">Catálogo</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo get_permalink(DURALUXE_CONTACTO_PAGE_ID); ?>" class="nav-link w-nav-link <?php if(get_the_ID() == DURALUXE_CONTACTO_PAGE_ID) echo 'w--current'; ?>">Contacto</a>
                </nav>
            </div>
        </div>
    <?php } ?>



</header>