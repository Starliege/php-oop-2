<?php

class User
{
    public $firstName;
    public $lastName;
    public $email;
    public $registrationYear;

    function __construct(string $firstName = null, string $lastName = null, string $email = null, int $registrationYear = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->registrationYear = $registrationYear;
    }

    function discount()
    {
        if((date("Y") - $this->registrationYear) >= 5)
        return 10;
        else
        return 0;
    }
}