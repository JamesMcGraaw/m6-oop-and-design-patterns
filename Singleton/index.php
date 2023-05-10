<?php

require_once 'SingleObject.php';

$singleton = SingleObject::getInstance();

echo '<pre>';
var_dump($singleton);
echo '</pre>';