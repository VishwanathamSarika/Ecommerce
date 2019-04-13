<?php
	error_reporting(0);
    $con = mysqli_connect("localhost", "root", "", "store")
    or die(mysqli_error($con));
    if(!isset($_SESSION)){
      session_start();
    }
?>