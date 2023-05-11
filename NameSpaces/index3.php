<?php

// use can have an 'as' part to create an alias.

/*
 * Put namespace NS\Database; in Database/Logger.php
 * Put namespace NS\Utils; in Utils/Logger.php
 */

require_once 'Database/Logger.php';
require_once 'Database/PigDao.php';
require_once 'Utils/Logger.php';

use NS\Database\Logger as DBLogger;
use NS\Database\PigDao;
use NS\Utils\Logger as UtilsLogger;

$dbLogger = new DBLogger();
$utilsLogger = new UtilsLogger();

/*
Code that wants to use both loggers at various points...
*/

$pigDao = new PigDao();
$pigs = $pigDao->fetchAll();
$utilsLogger->log("\n" . date('Y-m-d H:i:s')
    . ' All pigs fetched from database.'
);
