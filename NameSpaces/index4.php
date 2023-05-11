<?php

namespace NS;

// There is a constant called __NAMESPACE__ that contains whichever
// namespace you are currently in.

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

echo '<pre>';
var_dump(__NAMESPACE__);
echo '</pre>';

/*
Code that wants to use both loggers at various points...
*/

$pigDao = new PigDao();
$pigs = $pigDao->fetchAll();
$utilsLogger->log("\n" . date('Y-m-d H:i:s')
    . ' All pigs fetched from database.'
);
