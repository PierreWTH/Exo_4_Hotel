<?php

class Chambre {

    private string $_number;
    private string $_price;
    private string $_wifi;
    private Hotel $_hotel;
    private array $_reservation;

    public function __construct(int $number, int $price, string $wifi, Hotel $hotel)
    {
        $this->_number = $number;
        $this->_price = $price;
        $this->_wifi = $wifi;
        $this->_hotel = $hotel;  
        $this->_reservation = [];
    }












}
?>