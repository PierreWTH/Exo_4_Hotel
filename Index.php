<?php

spl_autoload_register(function ($class_name) {
    require_once $class_name . '.php';
    });

//INITIALISATION DES INSTANCES

// Hotels

$hotel_stras = new Hotel("Hilton **** Strasbourg", "10 route de la gare, 67100 Strasbourg");
$hotel_paris = new Hotel("Regent **** Paris", "61 Rue Dauphine, 75010 Paris");

// Chambres

$chambre_1_stras = new Chambre(1, 120, "Non", "2 lits", $hotel_stras);
$chambre_2_stras = new Chambre(2, 120, "Non", "2 lits", $hotel_stras);
$chambre_3_stras = new Chambre(3, 300, "Oui", "2 lits", $hotel_stras);
$chambre_4_stras = new Chambre(4, 300, "Oui", "2 lits", $hotel_stras);

$chambre_1_paris = new Chambre(1, 120, "Oui", "2 lits", $hotel_paris);
$chambre_2_paris = new Chambre(2, 300, "Non", "2 lits", $hotel_paris);

// Client

$murmann = new Client("Mickael", "MURMANN");
$gibello = new Client("Virgile", "GIBELLO");
$wietrich = new Client("Pierre", "WIETRICH");

// Reservation 

$reservation_murmann = new Reservation("2023-01-01", "2023-01-16", $murmann, $chambre_1_stras);
$reservation_gibello = new Reservation("2022-06-15", "2023-06-30", $gibello, $chambre_2_paris);



$murmann->showBooking();

$hotel_stras->showInfo();


?>