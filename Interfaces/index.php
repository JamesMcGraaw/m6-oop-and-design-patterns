<?php

require_once 'Pig.php';
require_once 'Animal.php';

$kevinBacon = new Pig();

//$animal = new Animal();

echo '<p>' . $kevinBacon->speak() . '</p>';
echo '<p>' . $kevinBacon->expressHappiness() . '</p>';