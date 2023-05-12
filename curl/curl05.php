<?php

// Previous examples all made a GET request.
// Do a POST request.

// In real life the following would be entered via a form
$postData = [
    'firstName' => 'Ada',
    'lastName'  => 'Lovelace',
    'submit'    => 'ok'
];

$curl = curl_init("https://postman-echo.com/post");

curl_setopt_array($curl,
    [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postData,
        CURLOPT_RETURNTRANSFER => true,
    ]
);

$server_output = curl_exec($curl);

curl_close ($curl);

echo '<pre>';
echo $server_output;
echo '</pre>';