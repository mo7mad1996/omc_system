<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'LaborMarketingManager' ) {
        
        // static variables
        $page_name = "مدير استقطاب عمال";
        include "../laborRecruitmentManager/backend/createTeable.php";
        
        require_once "../inclouds/document/static/head.php";
        
        // template
        include "templates/index.php";
        
        require_once "../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }