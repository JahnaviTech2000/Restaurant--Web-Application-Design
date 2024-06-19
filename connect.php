<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "test1"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}

$yourName = $_POST['yourName'];
$phoneNumber = $_POST['phoneNumber'];
$person = $_POST['person'];
$reservationDate = $_POST['reservation-date'];
//$reservationTime = $_POST['reservation-time'];
$messages = $_POST['message'];

$sql = "INSERT INTO booking (yourName, phoneNumber, person, reservationDate, messages)
VALUES ('$yourName', '$phoneNumber', '$person', '$reservationDate', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Reservation successfully booked!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
