<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'customerRecruitmentManager' ) {
        require_once "../../inclouds/database/connect.php";
        
        // static variables
        $page_name = "تقارير";
        
        require_once "../../inclouds/document/static/head.php";

        include "../../inclouds/document/static/components/header.php";
        include "../templates/navbar/navbar.php";

        // template
        include "templates/index.php";
        
        require_once "../../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }
        
