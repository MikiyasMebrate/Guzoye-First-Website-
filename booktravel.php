<?php
include 'connect.php';
$dbname = "busreservation";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$BusNumber;
session_start();
if (isset($_POST["BusNum"])) {
	$BusNumber = $_POST["BusNum"];
	echo $BusNumber;
}
?>
<?php
include('login.php');

if (isset($_POST["login"])) {
	$Email = $_POST["email"];
	$password = $_POST["password"];
	$query = "SELECT * FROM customer WHERE Email = '$Email'";
	$result = mysqli_query($conn, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		if ($row["Email"] == $Email && $row["CustPASSWORD"] == $password) {
			$_SESSION['Email'] = $Email;
			$sqlquery = "select customer.CutID from customer
                 where customer.Email = '$Email' && customer.CustPASSWORD='$password'";
			$resultbook = $conn->query($sqlquery);
			$IdCustomer;

			if ($resultbook->num_rows > 0) {
				while ($row = $resultbook->fetch_assoc()) {
					$IdCustomer = $row["CutID"];
				}
			}
			$sqlbus = "SELECT bus.BusID from bus WHERE bus.BusNumber = '$BusNumber'";
			$resutBus = $conn->query($sqlbus);
			$IdBusID;

			if ($resutBus->num_rows > 0) {
				while ($row = $resutBus->fetch_assoc()) {
					$IdBusID = $row["BusNumber"];
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
					echo $IdBusID;
				}
			}
		}
	}
}
?>
