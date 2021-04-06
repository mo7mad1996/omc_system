<?php

    if(!(@include_once "../inclouds/database/connect.php")) {
        @include_once "../../inclouds/database/connect.php";
    }


    $cols = array(
        "id"                        => "INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT",
        "init_date"                 => "DATE",
        "cumpany_name"              => "TEXT",
        "company_type"              => "TEXT",
        "city"                      => "TEXT",
        "area"                      => "TEXT",
        "responsible_name"          => "TEXT",
        "job"                       => "TEXT",
        "phone"                     => "MEDIUMTEXT",
        "email"                     => "TEXT",
        "service_type"              => "MEDIUMTEXT",
        
        "res1_called"               => "BOOLEAN",
        "res1_offer"                => "BOOLEAN",
        "res1_vist"                 => "BOOLEAN",
        "res1_continue_date"        => "DATE",
        "res1_next_continue_date"   => "DATE",
        
        "res2_sent"                 => "BOOLEAN",
        "res2_vist"                 => "BOOLEAN",
        "res2_reject"               => "BOOLEAN",
        "res2_accept"               => "BOOLEAN",
        "res2_continue_date"        => "DATE",
        
        "nots"                      => "VARCHAR(255)",
        "LastCallDate"              => "DATE",
        
        "added_by"                  => "smallint(6)"
    );

    $colomns = "";

    foreach($cols as $name => $type) {
        $colomns .= " $name $type, ";
    }
    // to remove the last comma
    $colomns = trim($colomns, ', ');
        
    $sql = "CREATE TABLE IF NOT EXISTS customers($colomns)";

    $res = mysqli_query($conn, $sql);
