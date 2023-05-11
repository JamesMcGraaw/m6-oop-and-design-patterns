<?php

use FarmApp\animals\Cow;
use PHPUnit\Framework\TestCase;
use FarmApp\Animals\Grass;

class CowTest extends TestCase
{
    public function testEatReturnsValidStringGivenValidFood()
    {
        $cow = new Cow('Daisy');
//        $grass = new Grass;
        $grassMock = $this->createMock(Grass::class); //Creates a new instance of Grass class as a mock
        $grassMock->expects($this->once()) // Only will need it once in this method
            ->method('getFoodType') // Will do a method called getFoodType
            ->willReturn('grass'); // Will get back this value - so ignore it when you do the unit test.
        $result = $cow->eat($grassMock);
        $this->assertEquals('Mmm grass', $result);
    }

    public function testEatThrowsExceptionGivenInvalidType()
    {
        $cow = new Cow('Daisy');
        $this->expectException(\TypeError::class);
        // The next line should throw an error because of the type hinting
        $result = $cow->eat([]);
    }
}
