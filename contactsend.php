<?php
include 'connect.php';
$dbname = "busreservation";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['Register'])){
    $FullName=$Phonenumber=$Email=$message="";
   $FullName=$_POST['fname'];
   $Phonenumber=$_POST['phone'];
   $Email=$_POST['email'];
   $message=$_POST['message'];
}

$sql = "INSERT INTO contactinfo (FullName,Phone,Email,Message)
VALUES ('$FullName', '$Phonenumber', '$Email','$message')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location: /GUZOYE/AccountCreate.php");
exit();
