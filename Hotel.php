<?php

class Hotel{

    private string $_name;
    private string $_adress;
    private array $_nb_rooms;
    

    public function __construct(string $name, string $adress)
    {
        $this->_name = $name;
        $this->_adress = $adress;
        $this->_nb_rooms = [];
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

    // Nb_rooms

    public function get_nb_rooms()
    {
        return $this->_nb_rooms;
    }

    
    public function set_nb_rooms($_nb_rooms)
    {
        $this->_nb_rooms = $_nb_rooms;

        return $this;
    }

}


?>