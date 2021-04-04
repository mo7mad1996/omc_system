<?php

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = ""; 
    $dbName = "omc";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if($conn) {
        // add users table
        addUsersTable($conn)    ;    

        // add frist super admin
        addSuperAdmin($conn);
    }

    function addUsersTable($conn){
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
                'admin',
                'محمد ابراهيم',
                'admin',
                'CBD'
            )";
            $res = mysqli_query( $conn, $sql);
        }
    }

