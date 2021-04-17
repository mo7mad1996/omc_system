<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'laborRecruitmentManager' ) {

        require_once "../../inclouds/database/connect.php";
        require_once "../../LaborMarketingManager/addEmployee/template/data.php";
        
        // static variables
        $page_name = "واتساب";
        
        require_once "../../inclouds/document/static/head.php";
        
        include "../../inclouds/document/static/components/header.php";
        include "../templates/navbar/navbar.php";

        // template
        include "../../customerRecruitmentManager/whatsapp/templates/index.php";
        
        require_once "../../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }
