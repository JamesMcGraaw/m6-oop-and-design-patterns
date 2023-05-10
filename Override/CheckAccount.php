<?php

/*
When you override a method, you will have two versions of the same method:
one in the parent class and the other in the child class.

If it is useful, a child can call the method of the parent class. To do it,
you need to use the parent keyword with the scope resolution operator (::).
*/

require_once 'StandardAccount.php';

class CheckAccount extends StandardAccount
{
    private float $minBalance;

    public function __construct(float $openingAmount, float $minBalance)
    {
        if ($openingAmount > 0
            && $openingAmount >= $minBalance
        ) {
            parent::__construct($openingAmount);
            $this->minBalance = $minBalance;
        } else {
            throw new InvalidArgumentException('amount must be more than zero and higher than the minimum balance');
        }
    }

    /**
     * Override the method inherited from StandardAccount so that we can
     * check against our minimum balance.
     *
     * @param float $amount to be withdrawn.
     * @return bool True if successful, false otherwise.
     */
    public function withdraw(float $amount): bool
    {
        $canWithdraw = $amount > 0
            && ($this->getBalance() - $amount) > $this->minBalance;

        if ($canWithdraw) {
            // Ok to call method in StandardAccount
            return parent::withdraw($amount);
        }

        return false;
    }
}