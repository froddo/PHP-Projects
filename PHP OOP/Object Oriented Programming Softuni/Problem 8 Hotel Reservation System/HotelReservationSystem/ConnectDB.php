<?php
include "iReservable.php";
class ConnectDB implements iReservable
{
    private static $instance= null;
    private $conn;

    private $host='127.0.0.1';
    private $user='topalovr';
    private $pass='qwerty';
    private $name='hotel_reservation';

    protected function __construct()
    {

        $this->conn= new mysqli($this->host, $this->user, $this->pass, $this->name);
        if ($this->conn->connect_errno){

            throw new InvalidArgumentException("Something wrong with connection");

        }
        mysqli_set_charset($this->conn,'utf8');
    }
    public static function getInstance()
    {
        if (!self::$instance){
            self::$instance=new ConnectDB();
        }
        return self::$instance;
    }
    public function getConnection()
    {
        return $this->conn;
    }

    public function addReservation($reservation)
    {
        //Reservation.php
    }
    public function removeReservation($reservation)
    {
        //only admin
    }
}
$instance= ConnectDB::getInstance();
$conn=$instance->getConnection();
