<?php

namespace NS\Utils;

class Logger {
    private string $logFile = 'logfile.txt';

    public function __construct(string $filename = '')
    {
        if (!empty($filename)) {
            $this->logFile = $filename;
        }
    }

    public function log(string $data): void
    {
        $logFilePtr = fopen($this->logFile, 'a'); // Appends the current file (Can do read, write or append)
        fwrite($logFilePtr, print_r($data, true));
        fclose($logFilePtr);
    }
}
