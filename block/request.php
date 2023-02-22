<?php

function get()
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://gist.githubusercontent.com/Azreil-OFD/72537a38e1a48ddf122c7afe22e90002/raw/e85e73706df6c9be83169c6639ea383c08cf923f/gistfile1.json",
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


    return $response;

}