<?php

class Account
{
    public string $accountnumber;
    public string $type;
    public float $balance;

    public function __construct(string $accountnumber, string $type, float $balance)
    {
        $this->accountnumber = $accountnumber;
        $this->type = $type;
        $this->balance = $balance;
    }
    public function deposit(){

    }
    public function credit(){

    }
    public function getBalance(){
        return $this->balance;
    }

}