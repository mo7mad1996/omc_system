<?php
    if(isset($_GET['form_type'])) {
        if( $_GET['form_type'] == 'EditCustomer') {

            require_once "../../inclouds/database/connect.php";

            $arr = $_GET;
            array_pop($arr);
            array_pop($arr);
            array_pop($arr);
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
            foreach($arr as $key => $value) {


                $sql = "UPDATE customers SET `$key` = '$value' WHERE id = " . $_GET['id'];
                $res = mysqli_query($conn, $sql);
            }

            header("Location: " . $_GET['location']);

        }
    }