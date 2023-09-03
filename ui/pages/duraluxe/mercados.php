<?php
// Seo config

$title = "Duraluxe - Mercados";
$description = "En NCM ofrecemos elementos visuales de publicidad en el Punto de Venta (PLV). Contamos con amplia experiencia en diseño, creación de prototipos...";
$image = "https://uploads-ssl.webflow.com/5f6b88914d3eea4ffa532bec/5f77343078f4711c82df1437_Mobiliario%20-%208.jpg";
?>

<?php include "../page_template/header.php"; ?>

<div class="section-3 wf-section duraluxe-markets-header cover-background header-section">
    <div class="bg-black"></div>
    <div class="content-block">
        <h1>Mercados</span></h1>
        <div class="divider"></div>
    </div>
</div>

<div class="duralex-markets wf-section">

    <h2>CONFIAMOS EN SU IMAGINACIÓN ¡SIEMPRE SIN LÍMITES!</h2>
    <h3>INFINIDAD DE USOS</h3>
    <p>Le presentamos algunos usos, siendo conscientes de la libertad que permite un producto como este. Nuestro servicio de atención al cliente le ofrece el soporte necesario para que usted pueda dar rienda suelta a su imaginación. Le esperamos a usted y a sus ideas.</p>
    <p>Recuerde, siempre sin límites.</p>

    <div class="gallery photography">
        <h4>Fotografia</h4>
        <section id="image-carousel-photography" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/fotografia/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery signage">
        <h4>Señaletica</h4>
        <section id="image-carousel-signage"class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/senaletica/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery interior-design">
        <h4>Interiorismo</h4>
        <section id="image-carousel-interior-design" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/interiorismo/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery architecture-outdoorfacades">
        <h4>Arquitectura / Fachadas</h4>
        <section id="image-carousel-architecture-outdoorfacades" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/arquitectura_fachadas/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery bendableproducts">
        <h4>Productos flexibles</h4>
        <section id="image-carousel-bendableproducts" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/productos_flexibles/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery backsplash">
        <h4>Protectores contra salpicaduras</h4>
        <section id="image-carousel-backsplash" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/protectores_contra_salpicaduras/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery showerwalls">
        <h4>Paredes de ducha</h4>
        <section id="image-carousel-showerwalls" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/paredes_de_ducha/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>

    <div class="gallery ceilings">
        <h4>Techos</h4>
        <section id="image-carousel-ceilings" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php for($i=1; $i<=30; $i++){ ?>
                        <li class="splide__slide">
                            <img src="<?php echo $project_url;?>ui/assets/images/duraluxe/mercados/techos/<?php echo $i; ?>.webp">
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
    </div>
</div>

<div class="logo-section">
    <div class="container">
        <div class="flex-logos-warp"><img src="<?php echo $project_url; ?>ui/assets/images/Nespresso-logo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/tupinamba.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/prenatal.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo $project_url; ?>ui/assets/images/lacaixa.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/apli.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo $project_url; ?>ui/assets/images/hama.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/indo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/yves.svg" loading="lazy" width="230" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/arcos.svg" loading="lazy" width="159" alt="" class="client-logo smaller"><img src="<?php echo $project_url; ?>ui/assets/images/LOGOS-EXTENSION-1.png" loading="lazy" width="159" alt="" class="client-logo bigger"><img src="<?php echo $project_url; ?>ui/assets/images/LOGOS-AMENITIES-NOVOTECNIC-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/LOGOS-BBRAUN-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/LOGO-MIMETICA-1.png" loading="lazy" width="159" alt="" class="client-logo smaller"></div>
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

<?php include "../page_template/footer.php"; ?>