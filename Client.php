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

// GETTERS AND SETTER

    // First name

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    // Name

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    // Booking

    public function getBooking()
    {
        return $this->booking;
    }


    public function setBooking($booking)
    {
        $this->booking = $booking;

        return $this;
    }

}














?>