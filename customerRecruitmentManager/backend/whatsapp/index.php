<?php
    if(isset($_GET['whatsapp'])) {
        // returns
        $sent = [];
        $err  = [];

        foreach($_GET['to'] as $to) {
            $data = [
                'phone' => $to,         // Receivers phone
                'body'  => $_GET['msg'] // Message
            ];
            $json = json_encode($data); // Encode data to JSON

            // URL for request POST /message
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
            if((@file_get_contents($url, false, $options))) {
                array_push($sent, $to);
            } else {
                array_push($err, $to);
            }
        }

        header('Location: '. $_GET['location'] . '?sent=' . json_encode($sent) . '&err=' . json_encode($err) );
    }