<?php

class Hotel{

    private string $_name;
    private string $_adress;
    private array $_rooms;
    private array $_reservations;
    

    public function __construct(string $name, string $adress)
    {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_rooms = [];
        $this->_reservations = [];
    }

        
// Methodes

    // Chaque chambre qui est crée se relie a un Hotel

    public function addRoom(Chambre $room)
    {
        $this->_rooms[] = $room;

    }

    // Chaque reservation est ajoutée a un Hotel

    public function addReservation(Reservation $reservation)
    {
        $this->_reservations[] = $reservation;

    }


    public function showReservation()
    {
        foreach ($this->_reservations as $reservation)
        {   
            echo "Nombre de réservations : " .count($this->_reservations) ."<br>";
            echo $reservation->get_client()->getFirstname()." ".$reservation->get_client()->getName(). " - Chambre : ".$reservation->get_room()->get_number(). " du " .$reservation->get_date_end() . " au ".$reservation->get_date_end();
        }
            
            
    }

    public function __toString()
        {
            return $this->get_name();
        }


// GETTERS AND SETTERS

    // Name

    public function get_name()
    {
        return $this->_name;
    }

    
    public function set_name($_name)
    {
        $this->_name = $_name;

        return $this;
    }

    // Adress

    public function get_adress()
    {
        return $this->_adress;
    }

    public function set_adress($_adress)
    {
        $this->_adress = $_adress;

        return $this;
    }

    // Rooms

    public function getRooms()
    {
        return $this->rooms;
    }

    public function setRooms($rooms)
    {
        $this->rooms = $rooms;

        return $this;
    }
}


?>