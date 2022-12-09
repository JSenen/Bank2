<?php

class Customer
{
    public string $name;
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public array $accounts;

    function __construct(string $name, string $firstname, string $lastname,
                         string $email, string $password, array $accounts)
    {
        $this->name = $name;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->accounts = $accounts;
    }
    function getFullName()
    {
        return $this->name.' '.$this->firstname.' '.$this->lastname;
    }

}