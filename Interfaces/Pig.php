<?php

require_once 'Animal.php';
require_once 'Speaks.php';
require_once 'Happy.php';
class Pig extends Animal implements Speaks, Happy
{
    //Does pig specific stuff and has pig specific properties
    public function speak(): string
    {
        return  'Oink!';
    }

    public function expressHappiness(): string
    {
       return 'Wags tail';
    }
}