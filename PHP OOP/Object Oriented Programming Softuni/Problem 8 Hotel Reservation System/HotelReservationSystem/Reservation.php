<?php
include "ConnectDB.php";
class Reservation extends ConnectDB
{
    private $startDate;
    private $endDate;
    private $guest;
    private $room;
    private $reservation;
    private $getReserv;
    private $connection;
    private $sql;
    private $id;
    private $firstName;
    private $lastName;
    private $idName;
    private $roomNumber;
    private $conn;
    public function __construct()
    {
        parent::__construct();
    }
    public function setReservation($startDate,$endDate,$guest,$room){
        $this->startDate=$startDate;
        $this->endDate=$endDate;
        $this->guest=$guest;
        $this->room=$room;
    }
    public function getReservation(){
        $this->reservation=[$this->startDate, $this->endDate, $this->guest, $this->room];
        return $this->reservation;
    }
    public function addReservation($reservation)
    {
        parent::addReservation($reservation);
        $this->getReserv=$reservation;
        $this->connection=$this->getConnection();
        $this->firstName=mysqli_real_escape_string($this->connection,$this->getReserv[0][0]);
        $this->lastName=mysqli_real_escape_string($this->connection,$this->getReserv[0][1]);
        $this->idName=mysqli_real_escape_string($this->connection,$this->getReserv[0][2]);
        $this->roomNumber=mysqli_real_escape_string($this->connection,$this->getReserv[3]);
        $this->id=mysqli_insert_id($this->connection);
        $this->sql='INSERT INTO `reservation_info`(id,first_name,last_name,id_name,start_date,end_date,room_number) VALUES("'.$this->id.'","'.$this->firstName.'",
        "'.$this->lastName.'","'.$this->idName.'","'.$this->getReserv[1].'","'.$this->getReserv[2].'","'.$this->roomNumber.'")';
        $this->conn=mysqli_query($this->connection,$this->sql);
        if (!$this->conn){
            throw new Exception("Something wrong with connection DB");
        }
    }
    public function removeReservation($reservation)
    {
        parent::removeReservation($reservation);

        //only admin
    }
}