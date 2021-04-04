<?php

    session_start();
    if(isset($_POST['id'])) {
        include_once "connect.php";

        $id = $_POST['id'];
        $name = $_POST['name'];
        $username = $_POST['username'];
        $permission = json_decode($_SESSION['user'])->permission;

        if(empty($_POST['newpassword'])) {
            $password = $_POST['password'];
        } else {
            $password = $_POST['newpassword'];
        }

        $sql = "UPDATE `users` SET `username` = '$username' WHERE id = $id";
        mysqli_query($conn, $sql);
        $sql = "UPDATE `users` SET `name` = '$name' WHERE id = $id";
        mysqli_query($conn, $sql);
        $sql = "UPDATE `users` SET `password` = '$password' WHERE id = $id";
        mysqli_query($conn, $sql);


        $_SESSION['user'] =  json_encode(
            createUser(
                    $id,
                    $name,
                    $username,
                    $password,
                    $permission
                )
            );

            header("Location: /CBD/edit?done");

    } else {
        header("Location: /");
    }

    

    class User {
        var $id;
        var $name;
        var $username;
        var $password;
        var $permission;
    }

    function createUser( $id, $name, $username, $password, $permission ){
        $user = new User();

        $user->id = $id;
        $user->name = $name;
        $user->username = $username;
        $user->password = $password;
        $user->permission = $permission;

        return $user;
    }

