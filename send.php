<?php
include "connection.php";
session_start();
$user=$_POST['name'];
$room=$_POST['slct2'];
$chin=$_POST['checkin'];
$chout=$_POST['checkout'];
$stmt = $conn->prepare('insert into details(id,name,check_in,check_out) values(:room,:user,:chin,:chout)');
    $stmt->bindParam(':room', $room);
    $stmt->bindParam(':user', $user);
    $stmt->bindParam(':chin', $chin);
    $stmt->bindParam(':chout', $chout);
    $stmt->execute();
    $stmt = $conn->prepare("UPDATE rooms SET status = 'occupied' WHERE id = :room");
$stmt->bindParam(':room', $room);
$stmt->execute();
echo 'Booking Succesful';

?>