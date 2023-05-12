<?php

// Basic cURL example to get contents of a URL

// create & initialise a curl session
$curl = curl_init("www.example.com");
/*
The previous line is equivalent to:
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "www.example.com");
*/

// return the transfer as a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);

echo $output;
