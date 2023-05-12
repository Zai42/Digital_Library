<?php
include ("Digital Library.html");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "digital library";


// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//data insert into the piet database
//getting form data
$name = $_POST['search'];

$sql = "INSERT INTO usersearch (Search)
VALUES ('$name')";

$execute = mysqli_query($conn,$sql);
?>