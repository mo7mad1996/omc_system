<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'CBD' ) {
        
        // static variables
        $page_name = "Suber Admin page";
        
        require_once "../inclouds/document/static/head.php";
        
        // template
        include "templates/superAdmin.php";
        
        require_once "../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }
        
