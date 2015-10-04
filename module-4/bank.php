<?php
/**
 * Created by PhpStorm.
 * User: Traci
 * Date: 10/1/2015
 * Time: 7:26 PM
 */


class BankAccount
{
    /**
     * The name of the person who owns this account
     * @var string
     */
    public $owner;

    /**
     * How much money this person has
     * @var float
     */
    public $bankBalance;        // bad! to be public
                                // user interface and encapsulation


    /**
     * Add some money to your account
     * @param float $amount  How much you want to deposit
     * @return float
     */
    public function deposit($amount)
    {
       $this->bankBalance += $amount;
        return $this->bankBalance;
    }

    /**
     * Take some money out of your account
     * @param float $amount How much to take out of your account?
     * @todo: add validation to this to make sure they have enough money!
     *          Throw an Exception if they are broke!
     * @throws Exception
     * @return float
     */
    public function withdraw($amount)
    {
        if($amount > $this->bankBalance){
            // echo "you dont have enough money for this withdrawal";
            throw new Exception('Go away');   // Exception is php class
        }

        if($amount == $this->bankBalance)
        {


        }

        $this->bankBalance = $this->bankBalance - $amount;

        return $this->bankBalance;



    }

}


try {
    $myAccount = new BankAccount();

    $myAccount->owner = 'Samir';
    $myAccount->bankBalance = 23.22;
    $myAccount->deposit(10);
    $myAccount->withdraw(50);
} catch (Exception $e)  {
    echo 'An error occurred: ' . $e->getMessage();
}

// catch is to deal with the exception
// only 1st exception gets caught
// can't get many exceptions thrown from because execution stops, everything downstream stops
// could also print_r exception object $e
// routing exceptions to one place
// this class makes the gate
// does whatevers in the catch and stops doesn't try again
// use methods to access properties!!!!!

// use method to access properties
// like checking to see if you have 50 in accountBalance

// Exceptions rescues you from handling many different kinds of errors


echo '<pre>';
print_r($myAccount);
die();