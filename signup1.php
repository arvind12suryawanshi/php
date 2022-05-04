<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'loginform');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = "INSERT INTO login (FNAME, LNAME, EMAIL, PASSWD) VALUES ('$firstname', '$lastname', '$email', '$pass')";

mysqli_query ($connection, $data);
header('location:shoping_zone.php');

?>