<?php

// Seo config
$title = "Contacto";
$description = "En NCM ofrecemos elementos visuales de publicidad en el Punto de Venta (PLV). Contamos con amplia experiencia en diseño, creación de prototipos...";
$image = "https://uploads-ssl.webflow.com/5f6b88914d3eea4ffa532bec/5f77343078f4711c82df1437_Mobiliario%20-%208.jpg";

include "../page_template/header.php";
include '../../../common/common_functions.php';

if($_POST){

    $required_fields = [
        'NAME',
        'COMPANY',
        'EMAIL',
        'PHONE',
        'MESSAGE'
    ];

    $showError = false;

    foreach($required_fields as $required_field){
        if(!array_key_exists($required_field, $_POST) || $_POST[$required_field] == null){
            $showError = true;
            $messageError = "Todos los campos son requeridos";
        }
    }

    if(!$showError){
        send_email_duraluxe_contact_form(
            $_POST['NAME'],
            $_POST['EMAIL'],
            $_POST['COMPANY'],
            $_POST['PHONE'],
            nl2br($_POST['MESSAGE']),
            array_key_exists('WANTS_SAMPLES', $_POST) ? $_POST['WANTS_SAMPLES'] : false,
            $duraluxe_contact_config,
            $project_url,
        );
    }
}

?>
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
            <div class="form-block">
                <form id="duraluxe-contact-form" action="" name="duraluxe-contact-Form" data-name="Duraluxe Contact Form" method="post">
                    <div class="contact-form-grid">
                        <input type="text" class="field w-input" maxlength="256" name="NAME" data-name="NAME" placeholder="Nombre" id="NAME" value="<?php if (array_key_exists('NAME', $_POST) && $_POST['NAME']) echo $_POST['NAME']; ?>" required>
                        <input type="text" class="field w-input" maxlength="256" name="COMPANY" data-name="COMPANY" placeholder="Empresa" id="COMPANY" value="<?php if (array_key_exists('COMPANY', $_POST) && $_POST['COMPANY']) echo $_POST['COMPANY']; ?>" required>
                        <input type="email" class="field w-input" maxlength="256" name="EMAIL" data-name="EMAIL" placeholder="Email" id="EMAIL" value="<?php if (array_key_exists('EMAIL', $_POST) && $_POST['EMAIL']) echo $_POST['EMAIL']; ?>" required="">
                        <input type="tel" class="field w-input" maxlength="256" name="PHONE" data-name="PHONE" placeholder="Teléfono" id="PHONE" value="<?php if (array_key_exists('PHONE', $_POST) && $_POST['PHONE']) echo $_POST['PHONE']; ?>" required="">
                        <textarea data-name="MESSAGE" maxlength="5000" id="MESSAGE" name="MESSAGE" placeholder="Escribe tu mensaje" class="field area w-input"><?php if (array_key_exists('MESSAGE', $_POST) && $_POST['MESSAGE']) echo $_POST['MESSAGE']; ?></textarea>
                        <br />
                        <div class="wants-sample">
                            <input type="checkbox" class="" name="WANTS_SAMPLES" data-name="WANTS_SAMPLES" id="WANTS_SAMPLES" <?php if(array_key_exists('WANTS_SAMPLES', $_POST) && $_POST['WANTS_SAMPLES']) echo 'checked'; ?> >
                            <label for="WANTS_SAMPLES">Solicitar muestras</label>
                        </div>
                        <br />
                        <input type="submit" value="ENVIAR" data-wait="Enviando..."  class="button-2 w-button">
                    </div>
                </form>
                <?php if($_POST && !$showError){ ?>
                    <div class="w-form-done">
                        <div>¡Gracias! ¡Su mensaje ha sido recibido!</div>
                    </div>
                <?php } else if ($_POST && $showError) { ?>
                    <div class="w-form-fail">
                        <div><?php echo $messageError; ?></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="mapa wf-section">
        <div class="w-embed w-iframe"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2987.9975963645943!2d2.038754816025083!3d41.504326896699304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a493d8a48094b7%3A0xf33c78d1f240fb88!2sAv.%20de%20Can%20Ros%C3%A9s%2C%2010%2C%2008191%20Rub%C3%AD%2C%20Barcelona!5e0!3m2!1sen!2ses!4v1603388113410!5m2!1sen!2ses" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
    </div>

<?php include "../page_template/footer.php"; ?>