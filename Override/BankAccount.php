<?php
abstract class BankAccount
{
    protected float $balance;

    public function getBalance(): float
    {
        return $this->balance;
    }

    abstract public function deposit(float $amount): bool;
    abstract public function withdraw(float $amount): bool;
}
