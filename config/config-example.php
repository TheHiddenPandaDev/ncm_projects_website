<?php
    $page = (!empty($_GET) && array_key_exists('page', $_GET)) ? $_GET['page'] : '';
    $subpage = (!empty($_GET) && array_key_exists('subpage', $_GET)) ? $_GET['subpage'] : '';
    $project_url = "http://localhost/ncm/";