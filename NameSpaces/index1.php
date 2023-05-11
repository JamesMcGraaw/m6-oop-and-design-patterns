<?php

// Example of a failure because the namespaces aren't working

require_once 'Database/Logger.php';
require_once 'Database/PigDao.php';
require_once 'Utils/Logger.php';

$dbLogger = new Logger(); // but how do we know we're getting the right one?
$utilsLogger = new Logger();

/*
Code that wants to use both loggers at various points...
*/

$pigDao = new PigDao();
$pigs = $pigDao->fetchAll();
$utilsLogger->log("\n" . date('Y-m-d H:i:s')
    . ' All pigs fetched from database.'
);
