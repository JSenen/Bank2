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

    /**
     * @return string
     */
    public function getAccountnumber(): string
    {
        return $this->accountnumber;
    }

    /**
     * @param string $accountnumber
     */
    public function setAccountnumber(string $accountnumber): void
    {
        $this->accountnumber = $accountnumber;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }


}