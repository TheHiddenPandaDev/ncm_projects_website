<?php
/*
Template Name: Duraluxe - Home
*/

get_header();

?>


<div class="duralex-home-gallery wf-section">
    <section id="image-carousel-home" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <?php for($i=1; $i<=5; $i++){ ?>
                    <li class="splide__slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/duraluxe/homepage/<?php echo $i; ?>.webp">
                    </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</div>

<div class="duralex-features">
    <div class="features">
        <ul>
            <li>PANELES DE ALUMINIO PARA SUBLIMACIÓN</li>
            <li>GAMA PREMIUM</li>
            <li>NUEVA TECNOLOGÍA</li>
            <li>NUEVAS APLICACIONES</li>
            <li>NUEVOS COSTES</li>
            <li>¡SIEMPRE SIN LÍMITES!</li>
        </ul>
    </div>
</div>

<div class="duralex-message wf-section">
    <p>
        Duraluxe lleva los paneles de sublimación de aluminio al siguiente nivel, con colores de alta definición diseñados específicamente para soportar años de exposición a la luz solar y condiciones climáticas severas.
    </p>
    <p>
        Combinamos la resistencia a los rayones y la durabilidad del recubrimiento en polvo con la profundidad y la intensidad del color de las imágenes de alta resolución. También agregamos nuestras formulaciones Anti-Graffiti para un fácil mantenimiento y para proteger los acabados del vandalismo.
    </p>
    <p>
        ¡Con Duraluxe puedes hacer mucho más!
    </p>
</div>

<div class=" homepage-markets">
    <div class="row">
        <div class="col-md-6">
            <div class="image fotografia">
                <div class="bg-black"></div>
                <div class="text">Fotografía</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image senaletica">
                <div class="bg-black"></div>
                <div class="text">Señaletica</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="image interiorismo">
                <div class="bg-black"></div>
                <div class="text">Interiorismo</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image arquitectura_fachadas">
                <div class="bg-black"></div>
                <div class="text">Arquitectura / Fachadas</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="image productos_flexibles">
                <div class="bg-black"></div>
                <div class="text">Productos flexibles</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image protectores_contra_salpicaduras">
                <div class="bg-black"></div>
                <div class="text">Protectores contra salpicaduras</div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="image paredes_de_ducha">
                <div class="bg-black"></div>
                <div class="text">Paredes de ducha</div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image techos">
                <div class="bg-black"></div>
                <div class="text">Techos</div>
            </div>
        </div>
    </div>
</div>

<script>

    document.addEventListener( 'DOMContentLoaded', function () {
        new Splide( '#image-carousel-home', {
            heightRatio: 0.5,
            type    : 'loop',
            autoplay: true,
            pagination: false,
        } ).mount();
    } );

</script>

<?php get_footer(); ?>
