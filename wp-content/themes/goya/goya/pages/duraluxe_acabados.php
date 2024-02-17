<?php
/*
Template Name: Duraluxe - Acabados
*/

get_header();

?>

<div class="section-3 wf-section duraluxe-finishes-header cover-background header-section">
    <div class="bg-black"></div>
    <div class="content-block">
        <div class="subheading">nuestros acabados</div>
        <h1>¡Conoce nuestros nuevos acabados, ideas para tus productos y mucho más!</h1>
        <div class="divider"></div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="duralex-finishes wf-section col-xl">
            <h2>CARACTERÍSTICAS</h2>
            <p>Aluminio de primera calidad de 1,4 mm</p>
            <p>RecubrimIento de 152 micras. (2 capas)</p>
            <p>Medida máxima del panel 1200x2400mm</p>
            <p>Sin disolventes / Inodoro</p>
            <p>Máxima flexibilidad</p>
            <p>Nueve acabados</p>
            <p>Se puede cortar antes/después de sublimar _ No son inflamables</p>
            <p>Antimicrobiano</p>
            <p>5 años de garantia para exteriores con resistencia a los rayos UV</p>
            <p>Mantiene colores vibrantes y claridad, incluso bajo la luz solar directa _ Anti-grafitis / anti-vandalismo</p>
            <p>Producto 100% reciclable</p>
            <p>Fácil de limpiar y desinfectar</p>
        </div>

        <div class="duralex-finishes wf-section col-xl">

            <div class="container">
                <div class="row">
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_SATINADO_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover satinado"></div>
                            <div class="title">SATINADO</div>
                        </a>
                    </div>
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_MATE_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover mate"></div>
                            <div class="title">MATE</div>
                        </a>
                    </div>
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_BRILLANTE_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover brillante"></div>
                            <div class="title">BRILLANTE</div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_SALTLAKE_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover salt-lake"></div>
                            <div class="title">SALT LAKE</div>
                        </a>
                    </div>
                    <div class="finish col">
                        <a href="<<?php echo get_permalink(DURALUXE_ACABADOS_ICETOUCH_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover ice-touch"></div>
                            <div class="title">ICE TOUCH</div>
                        </a>
                    </div>
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_GLOW_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover glow"></div>
                            <div class="title">GLOW</div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_CANVAS_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover canvas"></div>
                            <div class="title">CANVAS</div>
                        </a>
                    </div>
                    <div class="finish col">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_WALLSKY_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover wallsky"></div>
                            <div class="title">WALLSKY</div>
                        </a>
                    </div>
                    <div class="finish col" style="opacity: 0">
                        <a href="<?php echo get_permalink(DURALUXE_ACABADOS_CEPILLADO_PAGE_ID); ?>">
                            <div class="black-cover"></div>
                            <div class="cover cepillado"></div>
                            <div class="title">CEPILLADO</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="logo-section">
    <div class="container">
        <div class="flex-logos-warp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Nespresso-logo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tupinamba.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/prenatal.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lacaixa.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/apli.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hama.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yves.svg" loading="lazy" width="230" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arcos.svg" loading="lazy" width="159" alt="" class="client-logo smaller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOS-EXTENSION-1.png" loading="lazy" width="159" alt="" class="client-logo bigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOS-AMENITIES-NOVOTECNIC-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOS-BBRAUN-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO-MIMETICA-1.png" loading="lazy" width="159" alt="" class="client-logo smaller"></div>
    </div>
</div>

<?php get_footer(); ?>
