<?php
session_start();
if (!$_SESSION['Userid']) {
  header("Location: adminlogin.php");
  exit();
}
include('connect.php');

if (!$_SESSION['Userid']) {
  header("Location: adminlogin.php");
  exit();
}

$Booked;
$query = "SELECT COUNT(book.BOOKID) as 'BOOKED'
from book";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Booked = $row['BOOKED'];

$Bus;
$query = "SELECT COUNT(bus.busid) as 'BOOKED'from bus";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Bus = $row['BOOKED'];


$Customer;
$query = "SELECT COUNT(customer.CutID) as 'BOOKED'from customer";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Customer = $row['BOOKED'];

$Driver;
$query = "SELECT COUNT(driver.DriverID) as 'BOOKED'from driver";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Driver = $row['BOOKED'];

$Route;
$query = "SELECT COUNT(travel.TravelID) as 'BOOKED'from travel";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Route = $row['BOOKED'];

$Admin;
$query = "SELECT COUNT(administrator.AdminID) as 'BOOKED'from administrator";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Admin = $row['BOOKED'];

$Contact;
$query = "SELECT COUNT(contactinfo.ConID) as 'Contact' from contactinfo";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
$Contact = $row['Contact'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guzoye Admin Page</title>
  <script src="https://kit.fontawesome.com/47080b3c1e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/Stylesheet.css" />
  <link rel="icon" href="image/icon-logo.png" />
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
      <div style="background-color: white" id="Verstate">
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
      <div id="Verstate">
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
          <p>Admin</p>
        </a>
      </div>
    </div>
    <hr />

    <!--Body-->
    <div id="bodyadmin">
      <p style="color: black;">Welcome,</p>
      <p><?php echo $_SESSION['AdminName'] ?></p> <br>
      <div id="dash">
        <div class="dashcard">
          <div style="background-color:#FFBB5A;" class="line"></div>
          <div style="background-color:#FFBB5A;" class="title">
            <p>
              Customer</p>
          </div>
          <div class="titleinfo">Total Customer</div>
          <div class="count">
            <h2><?php echo $Customer; ?></h2>
          </div>
          <a style="color: #FFBB5A;" href="Admincustomer.php">View More→</a>
        </div>
        <div class="dashcard">
          <div style="background-color:#43b1b3;" class="line"></div>
          <div style="background-color:#43b1b3;" class="title">
            <p>
              Booking</p>
          </div>
          <div class="titleinfo">Total Booked</div>
          <div class="count">
            <h2><?php echo $Booked; ?></h2>
          </div>
          <a style="color:#43b1b3 ;" href="AdminBook.php">View More→</a>
        </div>
        <div class="dashcard">
          <div style="background-color:#7D50B9;" class="line"></div>
          <div style="background-color:#7D50B9;" class="title">
            <p>
              Bus</p>
          </div>
          <div class="titleinfo">Total Bus &nbsp; &nbsp; &nbsp; &nbsp;</div>
          <div class="count">
            <h2><?php echo $Bus; ?></h2>
          </div>
          <a style="color: #7D50B9;" href="AdminBus.php">View More→</a>
        </div>
        <div class="dashcard">
          <div style="background-color:#F75435;" class="line"></div>
          <div style="background-color:#F75435;" class="title">
            <p>
              Driver</p>
          </div>
          <div class="titleinfo">Total Drivers &nbsp; &nbsp;</div>
          <div class="count">
            <h2><?php echo $Driver; ?></h2>
          </div>
          <a style="color: #F75435;" href="Admindriver.php">View More→</a>
        </div>
      </div>
      <div id="dash2">
        <div class="dashcard">
          <div class="line"></div>
          <div class="title">
            <p style="color:white;">
              Route</p>
          </div>
          <div class="titleinfo">Total Route &nbsp; &nbsp;</div>
          <div class="count">
            <h2><?php echo $Route; ?></h2>
          </div>
          <a href="AdminRoute.php">View More→</a>
        </div>
        <div class="dashcard">
          <div style="background-color: #63C5EA;" class="line"></div>
          <div style="background-color: #63C5EA;" class="title">
            <p style="color:white;">
              Admins</p>
          </div>
          <div class="titleinfo">Total Admin &nbsp; &nbsp;</div>
          <div class="count">
            <h2><?php echo $Admin; ?></h2>
          </div>
          <a style="color:#63C5EA;" href="AdminAdd.php">View More→</a>
        </div>
        <div class="dashcard">
          <div style="background-color: #7D50B9;" class="line"></div>
          <div style="background-color: #7D50B9;" class="title">
            <p style="color:white;">
              Contact Us</p>
          </div>
          <div class="titleinfo">Total Contact &nbsp; &nbsp;</div>
          <div class="count">
            <h2><?php echo $Contact; ?></h2>
          </div>
          <a style="color:#63C5EA;" href="AdminAdd.php">View More→</a>
        </div>
      </div>

    </div>
  </div>
  </div>
</body>

</html>