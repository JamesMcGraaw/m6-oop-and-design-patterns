<?php
 // Allows you to use one platform

header("Access-Control-Allow-Origin: http://localhost:3000");



// This is to allow multiple cross platforms

$allowedOrigins = [
    'https://example.com',
    'https://staging.example.com' ,
    'https://production.example.com' ,
];

if(in_array($_SERVER['HTTP_ORIGIN'], $allowedOrigins))
{
    $http_origin = $_SERVER['HTTP_ORIGIN'];
} else {
    $http_origin = "https://example.com";
}

header("Access-Control-Allow-Origin: $http_origin");
