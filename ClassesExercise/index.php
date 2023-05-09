<?php

require_once 'Crisps.php';


$walkersSV = new Crisps('Salt and Vinegar', 'Walkers', 30);

echo '<p>I\'d love a bag of ' . $walkersSV->getManufactor() . ' crisps. If they have them, '
    . $walkersSV->getFlavour() . ' flavour please. The ' . $walkersSV->getWeight() . 'g bag. Cheers mate.</p>';

echo '<p>These ' . $walkersSV->getFlavour() . ' crisps are really ' . Crisps::FLAVOURPROFILE . ' aren\'t they?</p>';
