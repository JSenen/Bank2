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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return array
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @param array $accounts
     */
    public function setAccounts(array $accounts): void
    {
        $this->accounts = $accounts;
    }


}