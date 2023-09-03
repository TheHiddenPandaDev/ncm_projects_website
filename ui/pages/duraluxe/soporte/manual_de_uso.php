<?php
// Seo config

$title = "Soporte - Manual de uso";
$description = "En NCM ofrecemos elementos visuales de publicidad en el Punto de Venta (PLV). Contamos con amplia experiencia en diseño, creación de prototipos...";
$image = "https://uploads-ssl.webflow.com/5f6b88914d3eea4ffa532bec/5f77343078f4711c82df1437_Mobiliario%20-%208.jpg";
?>

<?php include "../../page_template/header.php"; ?>

<div class="section-3 wf-section duraluxe-guidelines-header">
    <div class="content-block">
        <h1>Manual de uso</h1>
        <div class="divider"></div>
    </div>
</div>

<div class="duraluxe-guidelines-section">
    <iframe src="<?php echo $project_url; ?>ui/assets/libraries/pdfjs/web/viewer.html?file=<?php echo $project_url; ?>ui/assets/documents/duraluxe/Duraluxe_Sublimation_Guide_2020_ver3.pdf"></iframe>
</div>



<div class="logo-section">
    <div class="container">
        <div class="flex-logos-warp"><img src="<?php echo $project_url; ?>ui/assets/images/Nespresso-logo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/tupinamba.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/prenatal.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo $project_url; ?>ui/assets/images/lacaixa.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/apli.svg" loading="lazy" alt="" class="client-logo smaller"><img src="<?php echo $project_url; ?>ui/assets/images/hama.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/indo.svg" loading="lazy" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/yves.svg" loading="lazy" width="230" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/arcos.svg" loading="lazy" width="159" alt="" class="client-logo smaller"><img src="<?php echo $project_url; ?>ui/assets/images/LOGOS-EXTENSION-1.png" loading="lazy" width="159" alt="" class="client-logo bigger"><img src="<?php echo $project_url; ?>ui/assets/images/LOGOS-AMENITIES-NOVOTECNIC-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/LOGOS-BBRAUN-1.png" loading="lazy" width="159" alt="" class="client-logo"><img src="<?php echo $project_url; ?>ui/assets/images/LOGO-MIMETICA-1.png" loading="lazy" width="159" alt="" class="client-logo smaller"></div>
    </div>
</div>

<?php include "../../page_template/footer.php"; ?>
