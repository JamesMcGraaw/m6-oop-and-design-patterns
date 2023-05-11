<?php

use FarmApp\animals\Cow;
use PHPUnit\Framework\TestCase;

class CowTest extends TestCase
{
    public function testEatReturnsValidStringGivenValidFood()
    {
        $cow = new Cow();
        $result = $cow->eat('grass');
        $this->assertEquals('Mmm grass', $result);
    }

    public function testEatThrowsExceptionGivenInvalidType()
    {
        $cow = new Cow();
        $this->expectException(\TypeError::class);
        // The next line should throw an error because of the type hinting
        $result = $cow->eat([]);
    }
}
