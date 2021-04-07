<?php
    // include_once $_SERVER['REQUEST_SCHEME'] .'://' .  $_SERVER['HTTP_HOST'] . "/inclouds/database/connect.php";
    
    if(!(@include_once "../inclouds/database/connect.php")) {
        include_once "../../inclouds/database/connect.php";
    }

    $cols = array(
        "id"                 => "INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT",
        "the_day"            => "smallint(6)",
        "registr_date"       => "DATE",
        "person_name"        => "MEDIUMTEXT",
        "qualification"      => "smallint(6)",
        "phone"              => "MEDIUMTEXT",
        "city"               => "smallint(6)",
        "age"                => "smallint(6)",
        "result"             => "smallint(6)",
        "nots"               => "VARCHAR(255)",
        "next_continue_date" => "DATE",
        "final_call"         => "DATE",
        
        "continue1"          => "smallint(6)",
        "continue1_date"     => "DATE",
        "continue2"          => "smallint(6)",
        "continue2_date"     => "DATE",
        "continue3"          => "smallint(6)",
        "continue3_date"     => "DATE",
        
        "factory"            => "TEXT",
        
        "added_by"           => "smallint(6)"
    );

    $colomns = "";

    foreach($cols as $name => $type) {
        $colomns .= " $name $type, ";
    }
        
    $colomns = trim($colomns, ', ');

    $sql = "CREATE TABLE IF NOT EXISTS workers($colomns)";
    
    $res = mysqli_query($conn, $sql);