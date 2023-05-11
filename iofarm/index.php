<?php

require "vendor/autoload.php"; // The one require statement needed
use FarmApp\Animals\Cow;
use FarmApp\Animals\Pig;
use FarmApp\Animals\Horse;

$cow = new Cow('Daisy');

echo '<p>' . $cow->getName() . ' says: ' . $cow->eat('grass') . '</p>';

$pig = new Pig('Percy');

echo '<p>' . $pig->getName() . ' says: ' . $pig->eat('percy pigs (the vegan ones I\'m not a monster)') . '</p>';

$horse = new Horse('Shadowfax');

echo '<p>' . $horse->getName() . ' says: ' . $horse->eat('Sugar lumps') . '</p>';
