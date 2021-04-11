<?php

    if(isset($_GET['sms']) && isset($_GET['to'])) {

        if(
            mail( implode('; ', $_GET['to'] ), $_GET['subject'], $_GET['msg_input'] )){
            header("Location: ". $_GET['location'] . "?sent");
        } else {
            header("Location: ". $_GET['location'] . "?err");
        }

    } else {
        header('Location: /' );
    }

