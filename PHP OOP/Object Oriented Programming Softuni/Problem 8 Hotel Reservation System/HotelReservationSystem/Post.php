<?php
include "templates/header_index.php";
class Post
{
    private $firstName;
    private $lastName;
    private $id;
    private $startDate;
    private $endDate;
    private $roomPrice;
    private $roomNumber;
    private $roomName;
    private $info=array();

    public function __construct()
    {
        if ($_POST){
            $this->firstName=trim($_POST['first']);
            $this->lastName=trim($_POST['last']);
            $this->id=(double)trim($_POST['id']);
            $this->startDate=$_POST['start-date'];
            $this->endDate=$_POST['end-date'];
            $this->roomNumber=(int)trim($_POST['room-number']);
            $this->roomPrice=(int)$_POST['price'];
            $this->roomName=(int)$_POST['select-room'];

            if (empty($this->firstName) || empty($this->lastName) || empty($this->id) || empty($this->startDate) || empty($this->endDate) || empty($this->roomNumber) || empty($this->roomPrice) || empty($this->roomName)){
                throw new InvalidArgumentException("Empty post");
            }
        }
    }
    public function getWorker()
    {
        $this->info=[$this->firstName,$this->lastName,$this->id,$this->startDate,$this->endDate,$this->roomNumber,$this->roomPrice,$this->roomName];
        return $this->info;
    }
}