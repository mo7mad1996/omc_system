<?php

ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from","mo7mad369@gmail.com");

    if(isset($_GET['msg'])) {
        if(mail( $_GET['from'], $_GET['msg'], 'from: '. $_GET['from'])){
          echo "SENT";
        }
    }
?>

<form method="GET">
    <input name='from' type='text' placeholder="from" value="mo7mad369@gmail.com" />
    <input name='to' type='text' placeholder="to" />
    <textarea name='msg' placeholder="Enter Your message"></textarea>
    <button type="submit">SEND</button>
</form>
