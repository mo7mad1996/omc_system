<?php
    // $MY = array(
    //     "phone" => "+201067149417",
    //     "body"  => "test massage from localhost"
    // );
    // $token = 'nkwc6pm90s62fj74';
    // $instanceId = '256433';

    // $arr = json_encode($MY);
    // $url = 'https://api.chat-api.com/instance' . $instanceId.' /messages?token= ' .$token;
    // $url = 'https://api.chat-api.com/instance256433/messages?token=nkwc6pm90s62fj74';

    // $ch = curl_init();
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_POST, true);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $arr);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    //     'content-type:applcation/json',
    //     'content-length:' . strlen($arr)
    // ));

    // $result = curl_exec($ch);
    // echo $result;


    $data = [
        'phone' => '+201024475606', // Receivers phone
        'body' => 'Hello, from localhost', // Message
    ];
    $json = json_encode($data); // Encode data to JSON
    // URL for request POST /message
    $token = '83763g87x';
    $instanceId = '777';
    $token = 'nkwc6pm90s62fj74';
    $instanceId = '256433';
    $url = 'https://api.chat-api.com/instance'.$instanceId.'/message?token='.$token;
    // Make a POST request
    $options = stream_context_create(['http' => [
            'method'  => 'POST',
            'header'  => 'Content-type: application/json',
            'content' => $json
        ]
    ]);
    // Send a request
    $result = file_get_contents($url, false, $options);

