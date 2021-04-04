<?php
    session_start();

    if(isset($_POST['adduser'])) {
        include_once "../../inclouds/database/connect.php";

        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $permission = $_POST['permission'];

        $sql = "SELECT * FROM users WHERE username = '$username'" ;
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        if($count > 0){

            if(isset($_POST['location'])) {
                header('Location: ' . $_POST['location'] . '?msg=err');
            } else {
                header('Location: /' . json_decode($_SESSION['user'])->permission . '?msg=err');
            }
            
        } else {
            $sql = "
            INSERT INTO 
            users (`username`, `name`, `password`, `permission`) 
            VALUES( '$username',  '$name', '$password', '$permission')";
            
            mysqli_query($conn, $sql);


            if(isset($_POST['location'])) {
                header('Location: ' . $_POST['location'] . '?msg=Success');
            } else {
                header('Location: /' . json_decode($_SESSION['user'])->permission . '?msg=Success');
            }
        }
    } else {
        header('Location: /');
    }
