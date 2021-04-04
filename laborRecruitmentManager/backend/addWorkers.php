<?php

    if(isset($_POST['added_by'])) {
        require_once "../../inclouds/database/connect.php";


        $the_day = $_POST['the_day'];
        $registr_date = $_POST['registr_date'];
        $person_name = $_POST['person_name'];
        $qualification = $_POST['qualification'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $age = $_POST['age'];
        $result = $_POST['result'];
        $nots = $_POST['nots'];
        $continue1 = $_POST['continue1'];
        $continue2 = $_POST['continue2'];
        $continue3 = $_POST['continue3'];
        $factory = $_POST['factory'];
        $added_by = $_POST['added_by'];

        $sql = "
           INSERT INTO workers 
                ( `the_day`, `registr_date`, `person_name`, `qualification`, `phone`, `city`, `age`, `result`, `nots`, `continue1`, `continue2`, `continue3`, `factory`, `added_by`)
            VALUES 
                ( $the_day, '$registr_date', '$person_name', $qualification, '$phone', $city, $age, $result, '$nots', $continue1, $continue2, $continue3, '$factory', $added_by)
        ";

        mysqli_query($conn, $sql);
        header('Location: ' .  $_POST['location'] . '?msg=done');
        

    } else {
        header('Location: /');
    }