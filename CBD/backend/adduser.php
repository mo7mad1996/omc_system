<?php
    session_start();

    if(isset($_POST['adduser'])) {
        include_once "../../inclouds/database/connect.php";

        $arr = $_POST;
        array_pop($arr);

        if(isset($arr['adduser'])) {
            array_pop($arr);
        }

    //     $username = $_POST['username'];
    //     $name = $_POST['name'];
    //     $password = $_POST['password'];
    //     $permission = $_POST['permission'];

        $sql = "SELECT * FROM users WHERE username = '" . $arr['username']  . "' OR code = '" . $arr['code'] . "'" ;
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
            users (" . implode(', ', array_keys($arr)) . ") 
            VALUES('" . implode("', '", $arr) . "')";
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
