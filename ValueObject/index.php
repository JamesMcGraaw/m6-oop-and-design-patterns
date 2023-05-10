<?php

require_once 'EmailAddress.php';

//$email = 'fred@dredd.com';
//
//if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    throw new Exception('Invalid email address');
//}

$email = new EmailAddress('fred@dredd.com');

//$email .= 'kldsjflkjsdf';

//$email = new EmailAddress('hello');

echo $email->getEmail();