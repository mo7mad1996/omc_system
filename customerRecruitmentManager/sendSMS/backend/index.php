<?php

    if(isset($_POST['sendSMS'])) {
 
        $to = implode(',', $_POST['to']);
        $message = $_POST['msg'];
        
        $service_plan_id = 'c256b4758580437693c014aadcc48e58';
        $bearer_token = '75c45e74490f42b39d4142c27ecc2502';
        
        
        $send_from = "+201067149417";
        
        $recipient_phone_numbers = $to;  //May be several, separate with a comma `,`.
        
        
        // Check recipient_phone_numbers for multiple numbers and make it an array.
        if(stristr($recipient_phone_numbers, ',')) {
            $recipient_phone_numbers = explode(',', $recipient_phone_numbers);
        } else {
            $recipient_phone_numbers = [$recipient_phone_numbers];
        }

        // Set necessary fields to be JSON encoded
        $content = [
            'to'   => array_values($recipient_phone_numbers),
            'from' => $send_from,
            'body' => $message
        ];

        $data = json_encode($content);

        $ch = curl_init("https://us.sms.api.sinch.com/xms/v1/{$service_plan_id}/batches");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BEARER);
        curl_setopt($ch, CURLOPT_XOAUTH2_BEARER, $bearer_token);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $result = curl_exec($ch);

        if(curl_errno($ch)) {
            header('Location: ' . $_POST['location'] . '?msg=' . curl_error($ch)); // back to page

            echo 'Curl error: ' . curl_error($ch);
        } else {
            header('Location: ' . $_POST['location'] . '?msg=sent'); // back to page
        }
        
        curl_close($ch);
        
    }