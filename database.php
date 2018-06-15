<?php

$con = mysqli_connect("localhost","root","");

if(mysqli_connect_errno()){
    die('couldn\'t connect to the database'.mysqli_connect_error());
}
