<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'customersSalesManager' ) {
        
        // static variables
        $page_name = "الاعدادات";
        
        require_once "../../inclouds/document/static/head.php";

        // template
        include "../../inclouds/document/static/components/header.php";
        include "../../inclouds/document/static/components/edituser.php";
        

        require_once "../../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }