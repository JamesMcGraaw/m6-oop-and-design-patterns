<?php

require_once 'Ford.php';
require_once 'Vehicle.php';
require_once 'Meerkat.php';

$myCar = new Ford();

echo '<p>My car is a ' . $myCar->getManufacturer() . '</p>';

//$v = new Vehicle();
// Can't do this now because Vehicle is abstract.
//$v->setWeight(1000.5);
//echo '<p>My vehicle weighs ' . $v->getWeight() . ' kg.</p>';

$myCar->setWeight(1000.5);
echo '<p>My vehicle weighs ' . $myCar->getWeight() . ' kg.</p>';

echo '<p>The species of a meerkat is: ' . Meerkat::SPECIES . '</p>';

$aleksandr = new Meerkat('Aleksandr', 'CEO');

//$aleksandr->setName('Aleksandr');

echo '<p>Hello from ' . $aleksandr->getName() . '</p>';

echo '<p>Number in mob: ' . Meerkat::$numInMob . '</p>';

$sergei = new Meerkat('Sergei', 'Head of IT');
$maiya = new Meerkat('Maiya', 'Teacher');

echo '<p>Number in mob: ' . Meerkat::$numInMob . '</p>';
