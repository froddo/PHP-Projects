<?php
session_start();
include "templates/header_admin.php";
include "Reservation.php";

class Admin extends Reservation
{
    private $username;
    private $password;
    private $data=array();
    private $options;
    private $passHash;
    private $sql;
    private $connection;
    private $msql;
    private $row;

    public function setData($name, $pass)
    {
        $this->username=$name;
        $this->password=$pass;
    }
    public function getData()
    {
        return  $this->data=[$this->username,$this->password];
    }
    public function register()
    {
        if ($this->username=="rumen" && $this->password=="qwerty"){

            $this->connection=$this->getConnection();
            $this->username=mysqli_real_escape_string($this->connection,$this->getData()[0]);
            $this->password=mysqli_real_escape_string($this->connection,$this->getData()[1]);
            $this->options=['cost'=>12];
            $this->passHash=password_hash($this->password,PASSWORD_BCRYPT,$this->options);
            $this->sql=mysqli_query($this->connection,'INSERT INTO admin(username,password) VALUES ("'.$this->username.'","'.$this->passHash.'")');
            mysqli_insert_id($this->connection);
            if (!$this->connection){
                echo "no connection";
            }
            else{
                if (isset($_SESSION['login'])){
                    if (!array_key_exists('login',$_SESSION)){
                        $_SESSION['login']=1;
                    }
                }
                $_SESSION['login']++;
                header('location: AdminReservation.php');
            }
        }
        else{
            echo '<p>Wrong username and password</p>';
        }
    }
    public function checkRegister()
    {
        $this->msql=mysqli_query($this->getConnection(),'SELECT * FROM `admin`');
        if (mysqli_num_rows($this->msql)==0){
            $this->register();
        }
        else {

           while ($this->row=$this->msql->fetch_assoc()){
               if (password_verify($this->password,$this->row['password']) && $this->row['username']==$this->username){

                   if (isset($_SESSION['login'])){
                       if (!array_key_exists('login',$_SESSION)){
                           $_SESSION['login']=1;
                       }
                   }
                   $_SESSION['login']++;

                   header('location: AdminReservation.php');
               }
               else{
                   echo '<p>Password and username is invalid</p>';
               }
           }
        }
    }
}
$admin=new Admin();
if ($_POST){
    $admin->setData(trim($_POST['username']),trim($_POST['password']));
    $admin->checkRegister();
}


