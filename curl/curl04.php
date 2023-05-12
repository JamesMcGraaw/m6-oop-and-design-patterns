<?php

// Get information about our transfer using curl_getinfo()

$curlRequest = curl_init("https://www.bbc.co.uk");

curl_setopt($curlRequest, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($curlRequest);

$responseCode   = curl_getinfo($curlRequest, CURLINFO_HTTP_CODE);

$downloadLength = curl_getinfo($curlRequest, CURLINFO_CONTENT_LENGTH_DOWNLOAD_T);

curl_close($curlRequest);

echo '<p>Response code: ' . $responseCode . '</p>';
echo '<p>Download length: ' . $downloadLength . '</p>';