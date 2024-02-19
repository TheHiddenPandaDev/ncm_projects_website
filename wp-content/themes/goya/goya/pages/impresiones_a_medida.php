<?php
/*
Template Name: Impresiones a medida
*/

get_header();

?>

<div class="section-3 wf-section duraluxe-finishes-header cover-background header-section">
    <div class="bg-black"></div>
    <div class="content-block">
        <h1>Nuestros acabados</h1>
        <div class="divider"></div>
    </div>
</div>

<div class="custom-impressions">
     <div class="container">
        <div class="row">
            <div class="col">
                <div class="bg formatos"></div>
                <a class="button-custom-impressions" href="<?php echo get_permalink(NUESTROS_FORMATOS); ?>">
                    Formatos
                </a>
            </div>
            <div class="col">
                <div class="bg acabados"></div>
                <a class="button-custom-impressions" href="<?php echo get_permalink(NUESTROS_ACABADOS); ?>">
                    Acabados
                </a>
            </div>
            <div class="col">
                <div class="bg crear-obra"></div>
                <div class="cta-upload cta-white nav-item nav-header">
                    <a href="#" data-name="download_image" data-size="full" class="upload_link _open-popin">Crear mi obra</a>
                    <div class="back-to-crop"></div>
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
