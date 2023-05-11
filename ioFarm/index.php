<?php

use src\Animals\Cow;

require_once 'src/Animals/Cow.php';

$cow = new Cow('Daisy');

echo '<p>' . $cow->getName() . ' says: ' . $cow->eat('grass') . '</p>';
