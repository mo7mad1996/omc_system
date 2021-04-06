<?php

    if(isset($_POST['added_by'])) {
        require_once "../../inclouds/database/connect.php";

        $arr = array();

        foreach($_POST as $key => $value) {
            $arr[$key] = "'$value'";
        }

        array_pop($arr);

        $keys = implode(', ', array_keys($arr));
        $values = implode(', ', $arr);   

        $sql = "
            INSERT INTO workers 
                ( $keys )
            VALUES 
                ( $values )
        ";

        mysqli_query($conn, $sql);
        header('Location: ' .  $_POST['location'] . '?msg=done');
        

    } else {
        header('Location: /');
    }