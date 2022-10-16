<?php
require_once 'connect.php';
session_start();
$Errorcode = $Error = null;
if (isset($_POST["login"])) {
  $Email = $_POST["email"];
  $password = $_POST["password"];
  $query = "SELECT * FROM customer WHERE Email='$Email' and CustPASSWORD='$password' ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Email'] === $Email && $row['CustPASSWORD'] === $password) {
      $_SESSION['Userid'] = $row['CutID'];
      $_SESSION['Status'] = 'Login';
      $_SESSION['Username'] = $row['CustName'] . " " . $row['FatherName'];
      header('location:Searchbus.php');
    } else {
      $Errorcode = 1;
      $Error = "Invalid Password or Email";
    }
  } else {
    $Errorcode = 1;
    $Error = "Invalid Password or Email";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="CSS/Stylesheet.css" />
  <link rel="icon" href="image/icon-logo.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="js/scripts.js"></script>
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active"><img src="image/Logo-wz-bk.png" alt="" /></a>
    <a id="space"></a>
    <a href="index.php">Home</a>
    <a href="booking.php">My Booking</a>
    <a href="contact.php">Contact Us</a>
    <a> <button>Login</button></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div id="path">
    <div>
      <a href="index.php">Home</a>
    </div>
    <div>
      <p>/ Login</p>
    </div>
  </div>

  <div id="User_Login">
    <div>
      <img src="image/Icons/User-login.gif" alt="" /> <br />
      <br />
      <br />
      <br />
      <br />
    </div>
    <div id="Login_Form">
      <h2>User Login</h2>
      <p><?php
          if ($Errorcode == 1) {
            echo $Error;
          }
          ?>
      </p>
      <form name="login" method="POST" action="" onsubmit="return(Checklogin());">
        <input type="email" placeholder="Email" name="email" id="email" />
        <p id="emailcheck"></p>
        <input type="password" placeholder="Password" name="password" id="password" />
        <p id="passwordcheck"></p>
        <button name="login" type="submit" id="button-login">Login</button>
      </form>
      <br />
      <a href="#">Forgot Username/ Password</a>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <a href="signup.php">Create your Account &#x2192;</a>
    </div>
  </div>
  <br />
  <br />
  <footer id="footer">
    <div id="footerimg">
      <img src="image/Logo-wz-bk.png" alt="Logo" />
      <p>
        Guzoye provides safe, trusted, and standardize travel option around
        ethiopia's ling distance routes, operating across 100+ routes in 11
        states. its companion brand, provides comprehensive train travel
        information, serving over 1000+ users monthly.
      </p>
    </div>
    <div id="foot_book">
      <h2>Book With Us</h2>
      <p>
        <a href="index.php">Bus Tickets</a> <br />
        <a href="booking.php">My Booking</a> <br />
        <br />
        <br />
        <br />
      </p>
    </div>
    <div>
      <h2>Info</h2>
      <p>
        <a href="aboutus.php">About Us</a> <br />
        <a href="contact.php">Contact Us</a> <br />
        <a href="termandcondition.php">Terms & Conditions</a> <br />
        <a href="faq.php">FAQ</a>
      </p>
    </div>
  </footer>
  <div id="footerbottom">
    <br />
    Copyright &copy; 2022. All Rights Reserved. <br />
  </div>
</body>

</html>