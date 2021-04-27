<?php
    require_once "../../inclouds/database/connect.php";
    require_once "../../customerRecruitmentManager/backend/createtable.php";

    $sql = "SELECT * FROM customers";
        
    foreach($_GET as $key => $value) {
        $sql = "SELECT * FROM customers WHERE $key LIKE '%$value%'";
    }

    $res = mysqli_query($conn, $sql);
    $rows_count = mysqli_num_rows($res);
