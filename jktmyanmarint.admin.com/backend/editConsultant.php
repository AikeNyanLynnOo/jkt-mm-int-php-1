<?php

// db config
include("../confs/config.php");


$id = $_POST['appointment_IdEdit'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$type = $_POST['appointment_type'];

// $date = $_POST['appointment_date'];
$strToTime = strtotime($_POST["appointment_date"]);
$date = date('Y-m-d H:i:s', $strToTime);

if ($date == "1970-01-01 01:00:00") {
    $date = NULL;
}

$time = $_POST['appointment_time'];
$duration = $_POST['appointment_duration'];
$about = $_POST['about_consultant'];


$update_to_consultants = "UPDATE consultants SET name='$name',email ='$email' ,phone = '$phone',type='$type', date='$date',time='$time',duration='$duration',about='$about',updated_at=now() WHERE consultant_id=$id";

mysqli_query($conn, $update_to_consultants);
header("location: ../consultants.php");
