<?php

function get()
{
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_PORT => "5000",
        CURLOPT_URL => "http://localhost:5000/api/v1/",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);


    if ($err) {
        return "cURL Error #:" . $err;
    } else {
        return $response;
    }

}