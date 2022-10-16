<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: adminlogin.php");
    exit();
}
include('connect.php');
if (isset($_POST['add'])) {
    $busname = $busnumber = $travelid = "";
    $busname = $_POST['busname'];
    $busnumber = $_POST['busnum'];
    $travelid = $_POST['travelid'];

    $sql = "INSERT INTO bus (BusNumber, BusName, Bus_Set, TravelID)
       VALUES
         ('$busnumber', '$busname', '60', '$travelid' )";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location:newbusadded.php");
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
        <img src="image/adminpage/addbus.png" style="width:100px;" alt="" />
        <h1>Add New Bus</h1>

        <form class="in" name="contact" action="" method="POST" onsubmit="return(Checkcontact());">
            <input type="text" id="name" name="busname" placeholder="Bus Name" />
            <p id="checkname"></p>
            <input type="number" id="email" name="busnum" placeholder="Bus Number" />
            <p id="checkemail"></p>
            <input type="number" id="phone" name="travelid" placeholder="Travel ID" />
            <p id="checkphone"></p>
            <button id="button-login" name="add" type="submit" class="contsub">Add</button>
            <br />
            <br />
            <br />
        </form>
    </div>
</body>

</html>