<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$conn = mysqli_connect($servername, $username, $password, $dbname); 

if ($conn) {
    //echo "connection ok";
} else {
    echo "connection failed";
}


if ($_POST['register'])
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $sid = $_POST['id'];
    $mail = $_POST['email'];
    $pwd = $_POST['password'];
    $dob = $_POST['dob'];
    $gen = $_POST['gender'];
    $rel=$_POST['religion']; 
    $dept = $_POST['department'];
    

    $query = "INSERT INTO form VALUES ('$fname', '$lname', '$sid', '$mail', '$pwd', '$dob', '$gen', '$rel', '$dept')";

    $data = mysqli_query($conn, $query);

    if ($data) 
    {
       //echo "Data inserted into database";
    }
     else
     {
        echo "Failed to insert data";
    }
}
?>













