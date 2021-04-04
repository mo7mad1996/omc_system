<?php

    session_start();
    
    if( json_decode($_SESSION['user'])->permission == 'customerRecruitmentManager' ) {
        // create table
        include "backend/createtable.php";
        

        // static variables
        $page_name = "موظف استقطاب عملاء";
        
        require_once "../inclouds/document/static/head.php";
        
        // template
        include "templates/index.php";
        
        require_once "../inclouds/document/static/page_close.php";
    } else {
        header('Location: /');
    }
        
