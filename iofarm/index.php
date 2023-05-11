<?php

//require_once 'src/Animals/Cow.php';
//require_once 'src/Animals/Pig.php';

require "vendor/autoload.php"; // The one require statement needed
use FarmApp\Animals\Cow;
use FarmApp\Animals\Pig;

$cow = new Cow('Daisy');

echo '<p>' . $cow->getName() . ' says: ' . $cow->eat('grass') . '</p>';

$pig = new Pig('Percy');

echo '<p>' . $pig->getName() . ' says: ' . $pig->eat('percy pigs (the vegan ones I\'m not a monster)') . '</p>';
