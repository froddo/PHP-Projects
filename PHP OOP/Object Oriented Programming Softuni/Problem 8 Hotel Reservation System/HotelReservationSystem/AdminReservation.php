<?php
session_start();
$title="Admin";
include "templates/header.php";
include "templates/logout_header.php";
include "Reservation.php";
class AdminReservation extends Reservation
{
    private $connection;
    private $sql;
    private $row;
    private $data=array();
    private $getData;
    private $info;
    private $cancel;

    public function __construct()
    {
        parent::__construct();
        $this->connection=$this->getConnection();
        $this->sql=mysqli_query($this->connection,'SELECT * FROM reservation_info');
        while ($this->row=$this->sql->fetch_assoc()){
            $this->data[]=$this->row;
        }
        $this->set($this->data);
    }
    public static function session(){
        if(!isset($_SESSION['login'])){
            header("Location: index.php");
        }
    }
    public function set($data)
    {
        $this->getData=$data;
    }
    public function get()
    {
        return $this->getData;
    }
    public function cancel()
    {
        include "templates/cancel_reservation.php";

    }
    public function __toString()
    {
        foreach ($this->getData as $item) {

            foreach ($item as $key => $value) {

                $this->info.="".$key." - ".$value."<br>";
            }
        }
        return "$this->info";
    }
    public function removeReservation($reservation)
    {
        parent::removeReservation($reservation);
        $this->cancel=$reservation;
        $this->sql=mysqli_query($this->connection,'DELETE FROM reservation_info WHERE reservation_info.id="'.$this->cancel.'"');
        header('Location: AdminReservation.php');
    }
}
AdminReservation::session();
$admin=new AdminReservation();
echo $admin->cancel();
$admin->get();
echo $admin;
if (isset($_POST['submit'])){
    $admin->removeReservation($_POST['cancel']);
}
include "templates/footer.php";