<?php

    session_start();
    if(isset($_POST['username'])) {
    
        // incloude database files
        require_once "../inclouds/database/connect.php";

        $sql = "SELECT * FROM users WHERE username = '" . $_POST['username'] . "'";

        $res = mysqli_query( $conn, $sql);

        $count = mysqli_num_rows($res);
            
        if( $count > 0 ){
            while($row = mysqli_fetch_assoc($res)) {
                if ( $_POST['password'] == $row['password']){
                    
                    $_SESSION['user'] =  json_encode(
                        createUser(
                            $row['id'],
                            $row['name'],
                            $row['username'],
                            $row['password'],
                            $row['permission']
                            )
                        );

                        header('Location: /' . $row['permission']);
                    } else {
                        header('Location: /login?err=password');
                    }
                }
        } else {
            echo __LINE__;
            header('Location: /login?err=username');
        }
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

