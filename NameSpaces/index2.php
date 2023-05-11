<?php

/*
 * Put namespace NS\Database; in Database/Logger.php
 * Put namespace NS\Utils; in Utils/Logger.php
 */

require_once 'Database/Logger.php';
require_once 'Database/PigDao.php';
require_once 'Utils/Logger.php';

$dbLogger = new NS\Database\Logger();
$utilsLogger = new NS\Utils\Logger();

/*
Code that wants to use both loggers at various points...
*/

$pigDao = new NS\Database\PigDao();
$pigs = $pigDao->fetchAll();
$utilsLogger->log("\n" . date('Y-m-d H:i:s')
    . ' All pigs fetched from database.'
);
