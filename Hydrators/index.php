<?php

require_once 'Pig1.php';
require_once 'PigHydrator.php';

//$sally = new Pig1();
//
//echo '<pre>';
//print_r($sally);
//echo '</pre>';
//
//$pigArray = ['Sally', 280.5, 'yellow', 'Bornean Bearded'];
//
//PigHydrator::populateFromArray($pigArray, $sally);
//
//echo '<pre>';
//print_r($sally);
//echo '</pre>';

$db = new PDO('mysql:host=db; dbname=pigdb', 'root', 'password');
// Set global fetch mode to assoc
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$fred = PigHydrator::popuateFromDB($db, 2);

echo '<pre>';
print_r($fred);
echo '</pre>';
