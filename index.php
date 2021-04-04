<?php
    session_start();

    // Template...
    $is_login = isset($_SESSION['user']);
    if($is_login) {

        $user = json_decode($_SESSION['user']);

        header("Location: /" . $user->permission);

    } else {
        // to login page
        header("Location: /login");
    }

