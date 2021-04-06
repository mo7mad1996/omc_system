<?php
require_once "../../inclouds/database/connect.php";
require_once "../../customerRecruitmentManager/backend/createtable.php";

$sql = "SELECT * FROM customers";

if(isset($_REQUEST["init_date"])) {
    $sql = "SELECT * FROM customers WHERE init_date = '" . $_REQUEST["init_date"]. "'";
}

if(isset($_REQUEST["cumpany_name"])) {
    $sql = "SELECT * FROM customers WHERE cumpany_name = '" . $_REQUEST["cumpany_name"]. "'";
}

$res = mysqli_query($conn, $sql);

$rows_count = mysqli_num_rows($res);

