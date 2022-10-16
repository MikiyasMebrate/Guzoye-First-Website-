<?php
include 'connect.php';
$dbname = "busreservation";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$Errorcode = $Error = null;
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
else{
session_start();
if(isset($_POST["login"]))
{
	$Email=$_POST["email"];
	$password=$_POST["password"];
	$query="SELECT * FROM customer WHERE Email = '$Email' ";
	$result=mysqli_query($conn,$query);
	while($row=mysqli_fetch_assoc($result))
	{
		if($row["Email"]==$Email && $row["CustPASSWORD"]==$password)
		{
			$_SESSION['Email']=$Email;
           echo $Email;
		}else{
      $Errorcode = 1;
    $Error = "Incorrect Password/ Email";
    }
			}
}
}
?>