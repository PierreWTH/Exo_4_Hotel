<?php

class Reservation{

private string $_date;
private Client $_client;
private Chambre $_room;

    public function __construct(string $date, Client $client, Chambre $room)
    {
        $this->_date= $date;
        $this->_client = $client;
        $this->_room =$room;
    }















    
}

?>