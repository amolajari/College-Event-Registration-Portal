<?php

$server="Localhost";
$username="root";
$password ="";
$dbname="event_registration";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    die("Connection Failed :".mysqli_connect_error());
}
?>