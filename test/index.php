<?php

if( mail('mo7mad369@gmail.com','', 'this message from localhost', 'Form: mo7mad369@gmail.com') ){
    echo 'done<br>';
} else {
    echo 'no: please check error.log in path C:\xampp\sendmail<br>';
}