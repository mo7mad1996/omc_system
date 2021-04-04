<?php

    include "../inclouds/database/connect.php";

    $colomns = "
        id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        the_day smallint(6),
        registr_date DATE,
        person_name MEDIUMTEXT,
        qualification smallint(6) ,
        phone MEDIUMTEXT,
        city smallint(6),
        age smallint(6),
        result smallint(6),
        nots VARCHAR(255),

        continue1 smallint(6),
        continue2 smallint(6),
        continue3 smallint(6),
        
        factory text,

        added_by int(11)
    ";
    
    $sql = "CREATE TABLE IF NOT EXISTS workers($colomns)";
    $res = mysqli_query($conn, $sql);
