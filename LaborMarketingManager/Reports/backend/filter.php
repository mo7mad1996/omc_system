<?php
// include_once $_SERVER['REQUEST_SCHEME'] .'://' .  $_SERVER['HTTP_HOST'] . "/inclouds/database/connect.php";
if(!(@include_once "../inclouds/database/connect.php")) {
    include_once "../../inclouds/database/connect.php";
}

require_once "../../laborRecruitmentManager/backend/createTeable.php";

$sql = "SELECT * FROM workers";

    
foreach($_GET as $key => $value) {
    $sql = "SELECT * FROM workers WHERE $key = '$value'";
}

$res = mysqli_query($conn, $sql);
$rows_count = mysqli_num_rows($res);
