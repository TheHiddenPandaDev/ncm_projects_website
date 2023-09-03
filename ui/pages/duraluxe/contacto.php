<?php
// Seo config

$title = "Contacto";
$description = "En NCM ofrecemos elementos visuales de publicidad en el Punto de Venta (PLV). Contamos con amplia experiencia en diseño, creación de prototipos...";
$image = "https://uploads-ssl.webflow.com/5f6b88914d3eea4ffa532bec/5f77343078f4711c82df1437_Mobiliario%20-%208.jpg";
?>

<?php include "../page_template/header.php"; ?>

    <div class="section-3 wf-section duraluxe-contact-header">
        <div class="content-block">
            <h1>Contacto</span></h1>
            <div class="divider"></div>
        </div>
    </div>

    <div class="section-5-copy wf-section duraluxe-contact">
        <img src="<?php echo $project_url; ?>ui/assets/images/_CGF7982-comprimida.jpg" loading="lazy" sizes="(max-width: 479px) 100vw, (max-width: 991px) 56vw, (max-width: 1279px) 53vw, 55vw" srcset="<?php echo $project_url; ?>ui/assets/images/_CGF7982-comprimida-p-500.jpeg 500w, <?php echo $project_url; ?>ui/assets/images/_CGF7982-comprimida.jpg 1200w" alt="" class="background-image">
        <div class="content-block-copy">
            <h2 class="red-text">Ven a visitarnos</h2>
            <div class="form-block w-form">
                <form id="wf-form-Contact-Form" name="wf-form-Contact-Form" data-name="Contact Form" method="get" data-wf-page-id="5f91c29517d63b03ebabb738" data-wf-element-id="e09a6253-0dfe-2073-bdd6-1583eb5e40ab">
                    <div class="contact-form-grid">
                        <input type="text" class="field w-input" maxlength="256" name="NAME" data-name="NAME" placeholder="Nombre" id="NAME" required="">
                        <input type="text" class="field w-input" maxlength="256" name="COMPANY" data-name="COMPANY" placeholder="Empresa" id="COMPANY">
                        <input type="email" class="field w-node-e09a6253-0dfe-2073-bdd6-1583eb5e40b8-ebabb738 w-input" maxlength="256" name="EMAIL" data-name="EMAIL" placeholder="Email" id="EMAIL" required="">
                        <input type="tel" class="field w-node-_7b63e148-c85d-ea0a-d8c3-bc39b1c47e0d-ebabb738 w-input" maxlength="256" name="PHONE" data-name="PHONE" placeholder="Teléfono" id="PHONE" required="">
                        <textarea data-name="MESSAGE" maxlength="5000" id="MESSAGE" name="MESSAGE" placeholder="Escribe tu mensaje" class="field area w-node-e09a6253-0dfe-2073-bdd6-1583eb5e40c0-ebabb738 w-input"></textarea>
                        <div class="wants-sample">
                            <input type="checkbox" class="" name="WANTS_SAMPLES" data-name="WANTS_SAMPLES" id="WANTS_SAMPLES">
                            <label for="WANTS_SAMPLES">Solicitar muestras</label>
                        </div>
                        <input type="submit" value="ENVIAR" data-wait="Enviando..." id="w-node-e09a6253-0dfe-2073-bdd6-1583eb5e40c1-ebabb738" class="button-2 w-button">
                    </div>
                </form>
                <div class="w-form-done">
                    <div>¡Gracias! ¡Su mensaje ha sido recibido!</div>
                </div>
                <div class="w-form-fail">
                    <div>Algo salió mal al enviar el formulario. Vuelve a intentar más tarde.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="mapa wf-section">
        <div class="w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.9975963645943!2d2.038754816025083!3d41.504326896699304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a493d8a48094b7%3A0xf33c78d1f240fb88!2sAv.%20de%20Can%20Ros%C3%A9s%2C%2010%2C%2008191%20Rub%C3%AD%2C%20Barcelona!5e0!3m2!1sen!2ses!4v1603388113410!5m2!1sen!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    </div>

<?php include "../page_template/footer.php"; ?>