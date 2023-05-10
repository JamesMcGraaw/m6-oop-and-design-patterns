<?php

require_once 'BankAccount.php';

class StandardAccount extends BankAccount
{
    public function __construct(float $openingAmount)
    {
        $this->balance = $openingAmount;
    }

    public function deposit(float $amount): bool
    {
        if ($amount > 0) {
            $this->balance += $amount;
            return true;
        }
        return false;
    }

    public function withdraw(float $amount): bool
    {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;
    }
}
