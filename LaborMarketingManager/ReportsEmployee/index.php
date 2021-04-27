<?php

    session_start();
    if( json_decode($_SESSION['user'])->permission == 'LaborMarketingManager' ) {
        
        // static variables
        $page_name = "تقرير موظفين";
        
        require_once "../../inclouds/document/static/head.php";
        
        // template
        include "../../inclouds/document/static/components/header.php";
        include "../templates/navbar/navbar.php";
        include "template/index.php";

        require_once "../../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }