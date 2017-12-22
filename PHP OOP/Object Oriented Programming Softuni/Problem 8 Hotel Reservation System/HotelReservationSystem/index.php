<?php
$title="HotelReservation";
include "templates/header.php";
function __autoload($className) {
    require_once ("./" . $className . ".php");
}

/** TYPE_NUMBER $room SingleRoom(100-199), Bedroom(200-299), Apartment(300-399) */
//Price- single room 150 Euro, bedroom 250 Euro, apartment 350 Euro

try{
    $post=new Post();
    if ($post->getWorker()[7]==1){

        $singleRoom=new Room("Single Room- 1 bed","Standard room","with restroom","no balcony","TV, air-conditioner",$post->getWorker()[6]);
        echo $singleRoom;
        echo '<br>';
        $room=new SingleRoom($post->getWorker()[5]);
        $guest=new Guest($post->getWorker()[0], $post->getWorker()[1],$post->getWorker()[2]);

        $date=new Date(date("Y-m-d", strtotime($post->getWorker()[3])),date("Y-m-d", strtotime($post->getWorker()[4])));

        $reservation= new Reservation();
        $reservation->setReservation($guest->getInfo(),$date->getStartDate(),$date->getEndDate(),$room->getNumber());

        $bookingManager=new BookingManager();
        $bookingManager->checkReservation($reservation->getReservation(),$reservation->getConnection());
        $reservation->addReservation($reservation->getReservation());
        echo $bookingManager;
    }
    else if ($post->getWorker()[7]==2){
        $bedroom=new Room("Bedroom- 2 beds","Gold room","with restroom","with balcony","TV, air-conditioner, refrigerator, mini-bar, bathtub",$post->getWorker()[6]);
        echo $bedroom;
        echo '<br>';
        $room=new Bedroom($post->getWorker()[5]);
        $guest=new Guest($post->getWorker()[0], $post->getWorker()[1],$post->getWorker()[2]);

        $date=new Date(date("Y-m-d", strtotime($post->getWorker()[3])),date("Y-m-d", strtotime($post->getWorker()[4])));

        $reservation= new Reservation();
        $reservation->setReservation($guest->getInfo(),$date->getStartDate(),$date->getEndDate(),$room->getNumber());

        $bookingManager=new BookingManager();
        $bookingManager->checkReservation($reservation->getReservation(),$reservation->getConnection());
        $reservation->addReservation($reservation->getReservation());
        echo $bookingManager;
    }
    else if ($post->getWorker()[7]==3){
        $apartment=new Room("Apartment- 4 beds","Diamond room","with restroom","with balcony","TV, air-conditioner, refrigerator, mini-bar, bathtub, kitchen-box,free Wi-Fi",$post->getWorker()[6]);
        echo $apartment;
        echo '<br>';
        $room=new Apartment($post->getWorker()[5]);
        $guest=new Guest($post->getWorker()[0], $post->getWorker()[1],$post->getWorker()[2]);

        $date=new Date(date("Y-m-d", strtotime($post->getWorker()[3])),date("Y-m-d", strtotime($post->getWorker()[4])));

        $reservation= new Reservation();
        $reservation->setReservation($guest->getInfo(),$date->getStartDate(),$date->getEndDate(),$room->getNumber());

        $bookingManager=new BookingManager();
        $bookingManager->checkReservation($reservation->getReservation(),$reservation->getConnection());
        $reservation->addReservation($reservation->getReservation());
        echo $bookingManager;
    }
}catch (Exception $e){
    echo $e->getMessage();
}

include "templates/footer.php";


