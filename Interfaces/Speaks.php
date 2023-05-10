<?php

/*
 * Interfaces indicate what a class can do
 * Here we are saying that a something can speak
 */
interface Speaks
{
    public function speak(): string;
}