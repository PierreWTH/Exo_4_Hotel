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

    // Affiche les reservations de l'hotel selectionné 

    public function showReservation()
    {
        if (count($this->_reservations) == 0)
        {   
            echo "<h3> Reservations de ".$this->_name. "</h3>" ; 
            echo "Cet hotel aucune reservation. ";
        }
        
        else
        {   
            echo "<h3> Reservations de ".$this->_name. "</h3>" ; 
            foreach ($this->_reservations as $reservation)
            {   
                echo "Nombre de réservations : " .count($this->_reservations) ."<br>";
                echo $reservation->get_client()->getFirstname()." ".$reservation->get_client()->getName(). " - Chambre : ".$reservation->get_room()->get_number(). " du " .$reservation->get_date_end() . " au ".$reservation->get_date_end();
            }
            
        }
    }

    public function showInfo()
    {
        echo "<h3>" .$this->_name. "</h3>" ; 
        echo $this->_adress."<br><br>";
        echo "Nombre de chambres : ".count($this->_rooms)."<br>";
        echo "Nombre de chambres reservées : ".count($this->_reservations)."<br>";
        $free_rooms = count($this->_rooms) - count($this->_reservations);
        echo "Nombre de chambres disponibles : ".$free_rooms;



    }

    // Statut des chambres

    public function roomStatus()
    {   
        echo "<h3> Statut des chambres de " .$this->_name. "</h3>" ; 
        
        foreach ($this->_rooms as $room)
        {
            if (count($room->get_reservations())==0)
            {
                $etat = "Disponible";
            } 

            else
            {
                $etat = "Reservée";
            }

            echo "Chambre ". $room->get_number() ." - Prix : " .$room->get_price(). "€ - Wifi : " .$room->get_wifi(). " - Etat : ".$etat."<br>";


        }

    }

    public function __toString()
    {
        return $this->get_name();
    }


    public function ChambreReservee()
    {

        

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