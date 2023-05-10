<?php

class SingleObject
{
    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): SingleObject
    {
        if (self::$instance == null) {
            self::$instance = new SingleObject();
        }
        return self::$instance;
    }

    public function showMessage(): void
    {
        echo('Hello world!');
    }
}