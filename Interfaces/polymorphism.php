<?php

/*
We can type hint with an interface or abstract class.

This allows functions and methods to be more generic and operate on whole
categories of things.

This is called polymorphism.

Two classes that extend the same abstract class or implement the same
interface can be used in the same way. They are said to be polymorphic.

In the following example, Square and Circle are polymorphic.
*/

interface ShapeInterface
{
    public function moveBy(int $xOffset, int $yOffset): void;
    public function area(): float;
    public function perimeter(): float;
}

abstract class Shape implements ShapeInterface
{
    private int $x = 0;
    private int $y = 0;

    public function moveBy(int $xOffset, int $yOffset): void
    {
        $this->x += $xOffset;
        $this->y += $yOffset;
    }
}

class Square extends Shape
{
    private int $side = 10;

    public function area(): float
    {
        return $this->side * $this->side;
    }

    public function perimeter(): float
    {
        return $this->side * 4;
    }
}

class Circle extends Shape
{
    private int $radius = 5;

    public function area(): float
    {
        return pi() * $this->radius * $this->radius;
    }

    public function perimeter(): float
    {
        return 2 * pi() * $this->radius;
    }
}

// The showArea() function doesn't need to know whether it is dealing with a
// square, circle or whatever. As long as it's a Shape, it can be handled.

function showArea(Shape $shape): void
{
    echo $shape->area();
}

$mySquare = new Square();
$myCircle = new Circle();

showArea($mySquare);
echo '<br>';
showArea($myCircle);