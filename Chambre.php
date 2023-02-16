<?php

class Chambre {

    private string $_number;
    private string $_price;
    private string $_wifi;
    private string $bed;
    private Hotel $_hotel;
    private array $_reservation;

    public function __construct(int $number, int $price, string $wifi, $bed, Hotel $hotel)
    {
        $this->_number = $number;
        $this->_price = $price;
        $this->_wifi = $wifi;
        $this->_hotel = $hotel;  
        $this->_reservation = [];
    }

// GETTERS AND SETTERS

    // Number
    
    public function get_number()
    {
        return $this->_number;
    }

    public function set_number($_number)
    {
        $this->_number = $_number;

        return $this;
    }

    // Price

    public function get_price()
    {
        return $this->_price;
    }

    public function set_price($_price)
    {
        $this->_price = $_price;

        return $this;
    }

    // Wifi
    
    public function get_wifi()
    {
        return $this->_wifi;
    }

    public function set_wifi($_wifi)
    {
        $this->_wifi = $_wifi;

        return $this;
    }

    // Bed
    
    public function getBed()
    {
        return $this->bed;
    }
  
    public function setBed($bed)
    {
        $this->bed = $bed;

        return $this;
    }

    //Hotel
    
    public function get_hotel()
    {
        return $this->_hotel;
    }

    public function set_hotel($_hotel)
    {
        $this->_hotel = $_hotel;

        return $this;
        }

    // Reservation

    public function get_reservation()
    {
        return $this->_reservation;
    }

    public function set_reservation($_reservation)
    {
        $this->_reservation = $_reservation;

        return $this;
    }


}

?>