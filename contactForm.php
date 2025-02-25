<?php

include './connection.php';

$fname = $_POST['fname'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$data = "INSERT INTO contact_us (`name`,`email`,`number`,`message`) VALUES('$fname','$email','$number','$message')";
$query = mysqli_query($conn,$data);

header('Location: index.php');
exit();
    
?>