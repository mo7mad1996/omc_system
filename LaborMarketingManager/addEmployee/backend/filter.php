<?php
if(!(@include_once "../inclouds/database/connect.php")) {
    include_once "../../inclouds/database/connect.php";
}

$sql = "SELECT * FROM workers";

if(isset($_REQUEST["person_name"])) {
    $sql = "SELECT * FROM workers WHERE person_name = '" . $_REQUEST["person_name"]. "'";
}

if(isset($_REQUEST["registr_date"])) {
    $sql = "SELECT * FROM workers WHERE registr_date = '" . $_REQUEST["registr_date"]. "'";
}

$res = mysqli_query($conn, $sql);

$rows_count = mysqli_num_rows($res);

