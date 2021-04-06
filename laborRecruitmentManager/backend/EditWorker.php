<?php
    if(isset($_GET['form_type'])) {
        if( $_GET['form_type'] == 'editWorkers') {

            require_once "../../inclouds/database/connect.php";

            $arr = $_GET;
            array_pop($arr);
            array_pop($arr);
            array_pop($arr);
            
            foreach($arr as $key => $value) {
                $sql = "UPDATE workers SET `$key` = '$value' WHERE id = " . $_GET['id'];
                $res = mysqli_query($conn, $sql);
            }

            header("Location: " . $_GET['location']);

        }
    }