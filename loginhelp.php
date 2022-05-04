<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection) {
    echo "Connection is Establish!";
}
else {
    echo "ERROR Connection Failed!";
}

mysqli_select_db($connection, 'authentication');

// $firstname = $_POST['first_name'];
// $lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = "subham12surya@gmail.com";
$data2 = "1234";

if ($email == $data && $pass == "$data2") {
    header('location:shoping_zone.php');
}
else {
    echo "Error while logging In";
 
}

mysqli_query ($connection, $data, $data2);


?>