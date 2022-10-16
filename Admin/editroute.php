<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: adminlogin.php");
    exit();
}
include('connect.php');
if (isset($_POST['add'])) {
    $Starting = $Destination = $date = "";

    $RouteId = $_SESSION['Routeid'];
    $Starting = $_POST['starting'];
    $Destination = $_POST['destination'];
    $date = $_POST['traveldate'];
    $Amount = $_POST['amount'];
    $sql = "UPDATE travel
            set StartingPoint= '$Starting', Destination= '$Destination', TravelDate='$date', Amount='$Amount'
            where travelID = '$RouteId'";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location:newrouteadded.php");
        exit();
    } else {
        header("Location:addbus.php");
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Bus Tickets Online at Lowest Price| Guzoye</title>
    <script src="https://kit.fontawesome.com/47080b3c1e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/Stylesheet.css" />
    <link rel="icon" href="image/icon-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="js/scripts.js"></script>
</head>

<body>
    <div style="margin-top: 20px;" id="con-email">
        <img src="image/adminpage/addroute.png" style="width:100px;" alt="" />
        <h1>Edit Route Details</h1>

        <form class="in" name="contact" action="" method="POST" onsubmit="return(Checkcontact());">
            <input type="text" id="name" name="starting" placeholder="Starting Point" />
            <p id="checkname"></p>
            <input type="text" id="email" name="destination" placeholder="Destination" />
            <p id="checkemail"></p>
            <input type="date" id="phone" name="traveldate" placeholder="Travel Date" />
            <p id="checkphone"></p>
            <input type="number" id="phone" name="amount" placeholder="Amount" />
            <p id="checkphone"></p>
            <button id="button-login" name="add" type="submit" class="contsub">Add</button>
            <br />
            <br />
            <br />
        </form>
    </div>
</body>

</html>