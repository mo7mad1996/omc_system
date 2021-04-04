<?php

    if(isset($_POST['init_date'])) {
        session_start();

        require_once "../../inclouds/database/connect.php";

        $init_date = $_POST['init_date'];
        $cumpany_name = $_POST['cumpany_name'];
        $company_type = $_POST['company_type'];
        $city = $_POST['city'];
        $area = $_POST['area'];
        $responsible_name = $_POST['responsible_name'];
        $job = $_POST['job'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $service_type = $_POST['service_type'];
        $res1_called = isset($_POST['res1_called']) ? 1 : 0;
        $res1_offer = isset($_POST['res1_offer']) ? 1 : 0;
        $res1_vist = isset($_POST['res1_vist']) ? 1 : 0;
        $res1_continue_date = $_POST['res1_continue_date'];
        $res1_next_continue_date = $_POST['res1_next_continue_date'];

        $res2_sent = isset($_POST['res2_sent']) ? 1 : 0;
        $res2_vist = isset($_POST['res2_vist']) ? 1 : 0;
        $res2_reject = isset($_POST['res2_reject']) ? 1 : 0;
        $res2_accept = isset($_POST['res2_accept']) ? 1 : 0;
        $res2_continue_date = $_POST['res2_continue_date'];
        $nots = $_POST['nots'];
        $added_by = $_POST['added_by'];

        $sql = "
           INSERT INTO customers 
                ( `init_date`, `cumpany_name`, `company_type`, `city`, `area`, `responsible_name`, `job`, `phone`, `email`, `service_type`, `res1_called`, `res1_offer`, `res1_vist`, `res1_continue_date`, `res1_next_continue_date`, `res2_sent`, `res2_vist`, `res2_reject`, `res2_accept`, `res2_continue_date`, `nots`, `added_by`)
            VALUES 
                ( '$init_date', '$cumpany_name', '$company_type', '$city', '$area', '$responsible_name', '$job', '$phone', '$email', '$service_type', '$res1_called', '$res1_offer', '$res1_vist', '$res1_continue_date', '$res1_next_continue_date', '$res2_sent', '$res2_vist', '$res2_reject', '$res2_accept', '$res2_continue_date', '$nots', $added_by)
        ";

        mysqli_query($conn, $sql);

        header( 'Location: ' . $_POST['location'] . '?msg=done');
    }