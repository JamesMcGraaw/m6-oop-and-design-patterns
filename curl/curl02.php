<?php

// Get Json from an API.

$curlRequest = curl_init('https://swapi.dev/api/people/1/');
//$request = curl_init('https://postman-echo.com/get?thumbs=up&happy=birthday');

curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($curlRequest);

curl_close($curlRequest);

// If you want the output to display a bit better
$response = stripcslashes(json_encode(json_decode($response), JSON_PRETTY_PRINT));

echo '<pre>';
print_r($response);
echo '</pre>';
