<?php

    if(isset($_GET['sms']) && isset($_GET['to'])) {
        $sent = array();
        $err = array();

        // loop in every email address to send our mail. 
        foreach($_GET['to'] as $to) {
            echo  $to . '<br>';
            if(mail($to, $_GET['subject'], $_GET['msg_input'])) {
                $sent[] = $to;
            } else {
                $err[] = $to;
            }
        }

        header("Location: ". $_GET['location'] . "?EmailQuery&sent=" . json_encode($sent) . "&err=" . json_encode($err));

        // send Email with view every one in sendto.
        // if(
        //     mail( implode('; ', $_GET['to'] ), $_GET['subject'], $_GET['msg_input'] )){
        //     header("Location: ". $_GET['location'] . "?sent");
        // } else {
        //     header("Location: ". $_GET['location'] . "?err");
        // }

    } else {
        header('Location: /' );
    }

