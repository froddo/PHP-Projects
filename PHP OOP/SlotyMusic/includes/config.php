<?php
ob_start();
session_start();
$timezone = date_default_timezone_set("Europe/Sofia");

$con = mysqli_connect("localhost", "", "", "");

if (mysqli_connect_errno()){
    echo "Failed to connect: ".mysqli_connect_errno();
}