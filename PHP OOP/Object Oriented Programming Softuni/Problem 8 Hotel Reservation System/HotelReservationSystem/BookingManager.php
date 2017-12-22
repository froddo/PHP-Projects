<?php

class  BookingManager
{
    private $check;
    private $con;
    private $sql;
    private $msql;
    private $row;
    private $checkRoomLeft=false;
    private $checkRoomRight=false;
    private $count=1;
    private $roomCheck=true;
    private $addRooms=array();

    public function checkReservation($check,$con){
        $this->check=$check;
        $this->con=$con;
        $this->sql='SELECT `start_date`,`end_date`,`room_number` FROM `reservation_info`';
        $this->msql=mysqli_query($this->con,$this->sql);

        if ($this->count){
            while ($this->row=$this->msql->fetch_assoc()){

                if ($this->row['room_number']==$this->check[3]){
                    $this->addRooms[]=$this->row['room_number'];
                }
            }
            $this->count=0;
            $this->checkReservation($check,$con);
        }
        $this->count=1;
        while ($this->row=$this->msql->fetch_assoc()){

            if ($this->row['room_number']==$this->check[3]){
                $this->roomCheck=false;
                if ($this->row['room_number']==$this->check[3] && $this->row['start_date'] == $this->check[1] && $this->row['end_date'] == $this->check[2]){
                    break;
                }
                if ($this->row['start_date'] > $this->check[1] && $this->row['start_date'] > $this->check[2]){
                    // "Reservation with start date is free";
                    echo "<br>";
                    $this->checkRoomLeft=true;
                }
                if ($this->row['end_date'] < $this->check[1] && $this->row['end_date'] < $this->check[2]){

                    // "Reservation with an end date is free";
                    echo "<br>";
                    $this->checkRoomRight=true;
                }
                if ($this->row['start_date'] > $this->check[1] && $this->row['end_date'] < $this->check[2]){
                    $this->checkRoomRight=false;
                    $this->checkRoomLeft=false;
                    break;
                    //chosen date- between start and end date
                }
                if ($this->checkRoomRight == false && $this->checkRoomLeft == false){
                    break;
                }
                if ($this->count == count($this->addRooms) && $this->checkRoomLeft==true && $this->checkRoomRight==false){
                    break;
                }
                if ($this->count == count($this->addRooms) && $this->checkRoomLeft==false && $this->checkRoomRight==true){
                    break;
                }
                $this->checkRoomRight=false;
                $this->checkRoomLeft=false;

                $this->count++;
            }
        }
        if (mysqli_num_rows($this->msql)== 0){
            //No reservation
        }
        else if ($this->roomCheck==true){
            // The room and dates of booking are free

        }
        else if ($this->checkRoomLeft == true && $this->checkRoomRight == false){
            //The room and dates of booking are free

        }
        else if ($this->checkRoomLeft == false && $this->checkRoomRight == false){
           //Room and date are reserved
            throw new ErrorException("There is an existing reservation");
        }
        else if($this->checkRoomLeft == false && $this->checkRoomRight == true){
            //The room and dates of booking are free

        }
    }
    public function __toString()
    {
        return "Room ".$this->check[3]." is successfully booked for ".$this->check[0][0]." ".$this->check[0][1]." from ".$this->check[1]." to ".$this->check[2]."";
    }
}