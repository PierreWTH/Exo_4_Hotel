<?php

class Chambre {

    private int $_number;
    private float $_price;
    private bool $_wifi;
    private string $_bed;
    private Hotel $_hotel;
    private array $_reservations;

    public function __construct(int $number, int $price, string $wifi, $bed, Hotel $hotel)
    {
        $this->_number = $number;
        $this->_price = $price;
        $this->_wifi = $wifi;
        $this->_bed = $bed;
        $this->_reservations = [];
        $this->_hotel = $hotel;  
        $hotel->addRoom($this);
    }

// Methodes

    // Chaque reservation est ajoutée a une chambre

    public function addReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;

    }

    public function __toString()
    {
        return $this->get_number();
        return $this->get_bed();
            
    }

    // Conversion True en oui ou non 

    public function wifiStatus()
    {
        if ($this->get_wifi() == True)
        {
            return $wifistatus = "Oui";
                
        }
        else 
        {
            return $wifistatus = "Non";
        } 
                
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

    public function get_bed()
    {
        return $this->_bed;
    }

    public function set_bed($_bed)
    {
        $this->_bed = $_bed;

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

    public function get_reservations()
    {
        return $this->_reservations;
    }

    public function set_reservations($_reservations)
    {
        $this->_reservation = $_reservations;

        return $this;
    }



   
    
}

?>