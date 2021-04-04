<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'ExDirector' ) {
        
        // static variables
        $page_name = "نائب رئيس مجلس الاداره";
        
        require_once "../inclouds/document/static/head.php";
        
        // template
        include "templates/index.php";
        
        require_once "../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }