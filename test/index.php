<?php
    $MY = array(
        "phone" => "+201067149417",
        "body"  => "test massage from localhost"
    );
    $token = '83763g87x';
    $instanceId = '84104';

    $arr = json_encode($MY);
    $url = 'https://api.chat-api.com/instance'.$instanceId.'/messages?token='.$token;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'content-type:applcation/json',
        'content-length:' . strlen($arr)
    ));

    $result = curl_exec($ch);
    echo $result;