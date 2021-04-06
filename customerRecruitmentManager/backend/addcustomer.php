<?php

    if(isset($_POST['init_date'])) {

        require_once "../../inclouds/database/connect.php";

        $arr = array();

        foreach($_POST as $key => $value) {
            // check if Nummber =======
            $arr[$key] = "'$value'";
        }

        array_pop($arr); // remove Location colomn

        $cols = implode(', ' , array_keys($arr));
        $values = implode(", " ,$arr);

        $sql = "
           INSERT INTO customers 
                ( $cols )
            VALUES 
                ( $values )
        ";

        mysqli_query($conn, $sql);

        header( 'Location: ' . $_POST['location'] . '?msg=done');
    }