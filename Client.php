<?php

class Client{
private string $firstname;
private string $name;
private array $booking;

    public function __construct($firstname, string $name)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->booking = [];
    }

}














?>