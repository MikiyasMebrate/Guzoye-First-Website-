<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: adminlogin.php");
    exit();
}
include('connect.php');
if (isset($_POST['add'])) {
    $Name = $FatherName = $Phone = $Email = $password = "";
    $Name = $_POST['name'];
    $FatherName = $_POST['fname'];
    $Phone = $_POST['phone'];
    $Email = $_POST['Email'];
    $password = $_POST['Password'];

    $sql = "INSERT INTO administrator (AdminName, FatherName, Phone, Email, AdminPASSWORD)
VALUES ('$Name', '$FatherName', '$Phone','$Email','$password')";
    if (mysqli_query($conn, $sql)) {
        mysqli_close($conn);
        header("Location:newadminadded.php");
        exit();
    } else {
        header("Location:addadmin.php");
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
        <img src="image/adminpage/addcustomer.png" style="width:100px;" alt="" />
        <h1>Add New Admin</h1>

        <form class="in" name="contact" action="" method="POST" onsubmit="return(Checkcontact());">
            <input type="text" id="name" name="name" placeholder="First Name" />
            <p id="checkname"></p>
            <input type="text" id="email" name="fname" placeholder="Father Name" />
            <p id="checkemail"></p>
            <input type="tel" id="phone" name="phone" placeholder="Phone" />
            <p id="checkphone"></p>
            <input type="email" id="phone" name="Email" placeholder="Email" />
            <p id="checkphone"></p>
            <input type="password" id="phone" name="Password" placeholder="Password" />
            <p id="checkphone"></p>
            <button id="button-login" name="add" type="submit" class="contsub">Add</button>
            <br />
            <br />
            <br />
        </form>
    </div>
</body>

</html>