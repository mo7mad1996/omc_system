<?php

    if(isset($_GET['sms'])) {

        echo "<pre>";
            print_r($GLOBALS);
        echo "</pre>";
        
        if(
            mail( implode('; ', $_GET['to'] ), $_GET['subject'], $_GET['msg_input'] )){
            header("Location: ". $_GET['location'] . "?sent");
        } else {
            header("Location: ". $_GET['location'] . "?err");
        }

    } else {
        header('Location: /' );
    }

