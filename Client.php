<?php

class Client{
private string $_firstname;
private string $_name;
private array $_bookings;

    public function __construct($firstname, string $name)
    {
        $this->_firstname = $firstname;
        $this->_name = $name;
        $this->_bookings = [];
    }

// METHODES

    public function addBooking(Reservation $booking)
        {
        $this->_bookings[] = $booking;

        }

    public function showBooking()
    {   if (count($this->_bookings) == 0)
        {   
            echo "<h3> Reservations de ". $this->_firstname. " " .$this->_name. "</h3>" ; 
            echo "Vous n'avez pas encore de réservation.";
        }

        else
        {
            echo "<h3> Reservations de ". $this->_firstname. " " .$this->_name. "</h3>" ; 
            echo "Nombre de réservations : " .count($this->_bookings) ."<br>";
            foreach ($this->_bookings as $booking) 
            {
            echo "Hotel : ".$booking->get_room()->get_hotel()->get_name(). " / Chambre : " .$booking->get_room()->get_number()." (".$booking->get_room()->get_bed(). " - " .$booking->get_room()->get_price(). "€ - Wifi : ".$booking->get_room()->get_wifi(). ") du " .$booking->get_date_start(). " au " .$booking->get_date_end();
            }

            $date_start = new DateTime($booking->get_date_start());
            $date_end = new DateTime($booking->get_date_end());
            $interval = $date_start->diff($date_end);

            echo "<br> Montant : " .$interval->d * $booking->get_room()->get_price(). " €";

        }
        
    }



// GETTERS AND SETTER

    // First name

    public function getFirstname()
    {
        return $this->_firstname;
    }

    public function setFirstname($firstname)
    {
        $this->firstname = $_firstname;

        return $this;
    }

    // Name

    public function getName()
    {
        return $this->_name;
    }


    public function setName($name)
    {
        $this->name = $_name;

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