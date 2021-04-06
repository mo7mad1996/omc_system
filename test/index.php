<?php

    if(isset($_POST['sms'])){
        $mobile = $_POST['mobile'];
        $msg = $_POST['sms'];
        $encodedMessage = urlencode($msg);

        $authKey = "";
        $senderID = "";
        $route = 4;
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobile,
            'message' => $encodedMessage,
            'sender' => $senderID,
            'route' => $route
        );
        $url = "http://api.msg91.com/api/sendhttp.php";

        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
        ));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $response = curl_exec($ch);

        if(curl_errno($ch)) {
            echo 'error: ' . curl_error($ch);
        }

        curl_close($ch);
    }
?>
<form method='post'>

    <input name=mobile />
    <input name=sms />
    <button type="submit">Send</button>
</form>
