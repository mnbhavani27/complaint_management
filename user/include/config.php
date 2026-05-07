<?php
$con = mysqli_connect("localhost", "root", "0000", "cms");

if(!$con){
    die("Connection failed: " . mysqli_connect_error());
}
?>