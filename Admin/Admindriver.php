<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: adminlogin.php");
    exit();
}

if (isset($_POST['adddriver'])) {
    $_SESSION['DriverID'] = $_POST['DriverID'];
    header('location:editdriver.php');
}
?>
<!DOCTYPE html>
<html lang="en">

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
    <!--Body-->
    <div id="pathAdmin">
        <div>
            <a href="Admin.php">Home</a>
        </div>
        <div>
            <p>/ Welcome</p>
        </div>
        <div><a href="sessiondestroy.php"><button id="logout">logout</button></a></div>
    </div>
    <!--Vertical Navigation-->
    <div id="cont_AdminHome">
        <div id="VerticalNav">
            <img src="image/Logo-wz-bk.png" alt="" />
            <img src="image/Icons/Adminuser.png" alt="Adminuser" />
            <p>@<?php echo $_SESSION['Adminusername'] ?></p>
            <p>System Administrator</p>
            <div id="Verstate">
                <a href="Adminindex.php">
                    <img src="image/AdminPage/Dashbord.png" alt="" />
                    <p>Dashbord</p>
                </a>
            </div>
            <div id="Verstate">
                <a href="AdminBus.php">
                    <img src="image/AdminPage/bus.png" alt="" />
                    <p>Buses</p>
                </a>
            </div>
            <div id="Verstate">
                <a href="AdminRoute.php">
                    <img src="image/AdminPage/route.png" alt="" />
                    <p>Route</p>
                </a>
            </div>
            <div id="Verstate">
                <a href="Admincustomer.php">
                    <img src="image/AdminPage/Customer.png" alt="" />
                    <p>Customers</p>
                </a>
            </div>
            <div id="Verstate">
                <a href="AdminBook.php">
                    <img src="image/AdminPage/Booking.png" alt="" />
                    <p>Booking</p>
                </a>
            </div>
            <div style="background-color: white" id="Verstate">
                <a href="Admindriver.php">
                    <img src="image/AdminPage/driver.png" alt="" />
                    <p>Driver</p>
                </a>
            </div>
            <div id="Verstate">
                <a href="AdminContact.php">
                    <img src="image/AdminPage/contact.png" alt="" />
                    <p>Contact</p>
                </a>
            </div>
            <div id="Verstate">
                <a href="AdminAdd.php">
                    <img src="image/AdminPage/AddAdmin.png" alt="" />
                    <p> Admin</p>
                </a>
            </div>
        </div>
        <div id="bodyadmin">
            <p style="color: black;">Welcome,</p>
            <p><?php echo $_SESSION['AdminName'] ?></p> <br>
            <p>Driver</p> <br>
            <a href="adddriver.php"><button id="addbus">Add Driver Details</button></a>

            <?php
            include('connect.php');
            $sql = "SELECT driver.DriverID, driver.DriverName, bus.BusName,bus.BusNumber
FROM driver JOIN bus on driver.BusID=bus.BusID
ORDER by DriverName";
            $result = mysqli_query($conn, $sql);


            if ($result->num_rows > 0) { ?>
                <table id="table" style="width:80%;">
                    <tr>
                        <th>#</th>
                        <th>DriverID</th>
                        <th>Driver Name</th>
                        <th>Bus Name</th>
                        <th>Bus Number</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    $count = 1;
                    while ($row = $result->fetch_assoc()) { ?>
                        <form name="actiononbus" method="POST" action="">
                            <tr>
                                <td>
                                    <?php echo $count++; ?>
                                </td>
                                <td>
                                    <?php echo $row["DriverID"] ?>
                                </td>
                                <td>
                                    <?php echo $row["DriverName"] ?>
                                </td>
                                <td>
                                    <?php echo $row["BusName"] ?>
                                </td>
                                <td>
                                    <?php echo $row["BusNumber"] ?>
                                </td>
                                <td>
                                    <input type="hidden" name="DriverID" value="<?php echo $row["DriverID"] ?>">
                                    <button name="adddriver" id="actionbusedit" type="submit">EDIT</input>
                                </td>
                            </tr>
                        </form>
                    <?php
                    }
                    ?>
                </table> <?php
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                            ?>
        </div>
    </div>
</body>

</html>