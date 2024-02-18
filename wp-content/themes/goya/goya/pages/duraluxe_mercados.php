<?php
/*
Template Name: Duraluxe - Mercados
*/

get_header();

?>

<div class="section-3 wf-section duraluxe-markets-header cover-background header-section">
    <div class="bg-black"></div>
    <div class="content-block">
        <h1>Mercados</span></h1>
        <div class="divider"></div>
    </div>
</div>

<div class="duralex-markets wf-section">

    <div class="container">
        <h2>CONFIAMOS EN SU IMAGINACIÓN ¡SIEMPRE SIN LÍMITES!</h2>
        <h3>INFINIDAD DE USOS</h3>
        <p>Le presentamos algunos usos, siendo conscientes de la libertad que permite un producto como este. Nuestro servicio de atención al cliente le ofrece el soporte necesario para que usted pueda dar rienda suelta a su imaginación. Le esperamos a usted y a sus ideas.</p>
        <p>Recuerde, siempre sin límites.</p>

        <div class="row">
            <div class="gallery2 photography col-md-6">
                <div class="title"><h2>Fotografia</h2></div>
                <section id="image-carousel-photography" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=10; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/fotografia/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="gallery2 signage col-md-6">
                <div class="title"><h2>Señaletica</h2></div>
                <section id="image-carousel-signage"class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=10; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/senaletica/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="gallery2 interior-design col-md-6">
                <div class="title"><h2>Interiorismo</h2></div>
                <section id="image-carousel-interior-design" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=12; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/interiorismo/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="gallery2 architecture-outdoorfacades col-md-6">
                <div class="title"><h2>Arquitectura / Fachadas</h2></div>
                <section id="image-carousel-architecture-outdoorfacades" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=10; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/arquitectura_fachadas/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="gallery2 bendableproducts col-md-6">
                <div class="title"><h2>Productos flexibles</h2></div>
                <section id="image-carousel-bendableproducts" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=25; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/productos_flexibles/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="gallery2 backsplash col-md-6">
                <div class="title"><h2>Protectores contra salpicaduras</h2></div>
                <section id="image-carousel-backsplash" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=14; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/protectores_contra_salpicaduras/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>

        <div class="row">
            <div class="gallery2 showerwalls col-md-6">
                <div class="title"><h2>Paredes de ducha</h2></div>
                <section id="image-carousel-showerwalls" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=10; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/paredes_de_ducha/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="gallery2 ceilings col-md-6">
                <div class="title"><h2>Techos</h2></div>
                <section id="image-carousel-ceilings" class="splide">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($i=1; $i<=12; $i++){ ?>
                                <li class="splide__slide">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/mercados/techos/<?php echo $i; ?>.webp">
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="logo-section">
    <div class="container">
        <div class="flex-logos-warp"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Nespresso-logo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/tupinamba.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/prenatal.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/lacaixa.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/apli.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hama.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/indo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/yves.svg" loading="lazy" width="230" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arcos.svg" loading="lazy" width="159" alt="" class="client-logo smaller"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOS-EXTENSION-1.png" loading="lazy" width="159" alt="" class="client-logo bigger"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOS-AMENITIES-NOVOTECNIC-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGOS-BBRAUN-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/LOGO-MIMETICA-1.png" loading="lazy" width="159" alt="" class="client-logo smaller"></div>
    </div>
</div>
    <script>

        document.addEventListener( 'DOMContentLoaded', function () {
            new Splide( '#image-carousel-photography', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-signage', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-interior-design', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-architecture-outdoorfacades', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-bendableproducts', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-backsplash', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-showerwalls', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();

            new Splide( '#image-carousel-ceilings', {
                heightRatio: 0.5,
                type    : 'loop',
                autoplay: true,
            } ).mount();
        } );

    </script>

<?php get_footer(); ?>