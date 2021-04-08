<?php

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = ""; 
    $dbName = "omc";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if($conn) {
        // add users table
        if(function_exists("addUsersTable")) {
            addUsersTable($conn);    
        }
        
        // add frist super admin
        if(function_exists("addSuperAdmin")) {
            addSuperAdmin($conn);
        }
    }


        function addUsersTable($conn) {
            $colomns = " 
                id INT NOT NULL AUTO_INCREMENT  PRIMARY KEY ,
                username TEXT NOT NULL ,
                name TEXT NOT NULL ,
                password TEXT NOT NULL , 
                permission TEXT NOT NULL
            ";
            $sql = "CREATE TABLE IF NOT EXISTS users($colomns)";
            $res = mysqli_query($conn, $sql);
        }


    function addSuperAdmin($conn) {
        $sql = "SELECT * FROM users";
        $res = mysqli_query( $conn, $sql);

        if( mysqli_num_rows($res) == 0 ){
            $sql = "
            INSERT INTO users(
                username,
                name,
                password,
                permission
            )
            VALUES (
                'boss',
                'محمد ابراهيم',
                'boss',
                'CBD'
            )";
            $res = mysqli_query( $conn, $sql);
        }
    }

