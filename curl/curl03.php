<?php

// Download a file.

// The url of the file.
$url = "https://www.tutorialspoint.com/php/php_tutorial.pdf";

// Where we want to save the file on our server.
//echo __DIR__ . '<br>';
//echo DIRECTORY_SEPARATOR . '<br>';
$file = __DIR__ . DIRECTORY_SEPARATOR . "php_tutorial.pdf";

// Open the file on our server for writing.
$fileHandle = fopen($file, "w");

$curl = curl_init();

curl_setopt_array($curl,
    [
        CURLOPT_URL => $url,
        CURLOPT_FILE => $fileHandle,
    ]
);

$data = curl_exec($curl);

curl_close($curl);

// Close the file
fclose($fileHandle);