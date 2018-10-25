<?php
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phonenumber = $_POST['phone_number'];
saveToFile($firstname, $lastname, $email, $password, $phonenumber);

function saveToFile($firstname, $lastname, $email, $password, $phonenumber) {
    $fileHandler = fopen('task1.txt', 'a');
    $string =  $firstname . ',' . $lastname . ',' . $email . ',' . $password . ',' . $phonenumber . "\n";
    fwrite($fileHandler, $string);
    fclose($fileHandler);
}

function saveToDatabase($firstname, $lastname, $email, $password, $phonenumber) {
$serverName = "localhost";
$database = "signup";
$username = "root";
$password = "";

//Open database connection
$conn = mysqli_connect($serverName, $username, $password, $database);

//Check that connection exists
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO users (first_name, last_name, email, password, phone_number, created_date)
VALUES ('$firstname', '$lastname', '$email', '$password', '$phonenumber', NOW())";
$result = msqli_query($conn, $sql);

//Check for errors
if (!$result) {
    die("Error:" . $sql . "<br>" . mysqli_error($conn));
}

//Close the connection
mysqli_close($conn);
}