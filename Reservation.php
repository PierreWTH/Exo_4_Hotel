<?php

class Reservation{

private string $_date_start;
private string $_date_end;
private Client $_client;
private Chambre $_room;

    public function __construct(string $date_start, string $date_end, Client $client, Chambre $room)
    {
        $this->_date_start= $date_start;
        $this->_date_end= $date_end;
        $this->_client = $client;
        $this->_room =$room;
    }

// GETTERS AND SETTERS

    // Date start

    public function get_date_start()
    {
        return $this->_date_start;
    }

    public function set_date_start($_date_start)
    {
    $this->_date_start = $_date_start;

        return $this;
    }

    // Date end

    public function get_date_end()
    {
        return $this->_date_end;
    }


    public function set_date_end($_date_end)
    {
    $this->_date_end = $_date_end;

        return $this;
    }

    // Client

    public function get_client()
    {
        return $this->_client;
    }


    public function set_client($_client)
    {
        $this->_client = $_client;

        return $this;
    }

    //Room

    public function get_room()
    {
        return $this->_room;
    }


    public function set_room($_room)
    {
    $this->_room = $_room;

        return $this;
    }
}

?>