<?php
    $page = (!empty($_GET) && array_key_exists('page', $_GET)) ? $_GET['page'] : '';
    $subpage = (!empty($_GET) && array_key_exists('subpage', $_GET)) ? $_GET['subpage'] : '';
    $project_url = "http://localhost/ncm/";
    $duraluxe_contact_config = [
        'from' => 'email@domain.com',
        'to' => 'email@domain.com',
        'smtp_host' => "smtp.domain.com",
        'smtp_port' => 578,
        'smtp_username' => 'email@domain.com',
        'smtp_password' => '1234',
    ];