<?php

namespace NS\Database;

require_once 'Database.php';

class Logger
{
    private Database $database;

    private string $logTable = 'Log';

    public function __construct(string $tablename = '')
    {
        $this->database = new Database();

        if (!empty($tablename)) {
            $this->logTable = $tablename;
        }
    }

    public function log(string $data): void
    {
        $sql = 'INSERT INTO `Log`'
            . '(`log_msg`)'
            . 'VALUES (:log_data);';

        $this->database->updateTable($sql, [$data]);
    }
}
