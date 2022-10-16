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
  <div class="topnav" id="myTopnav">
    <a href="index.php" class="active"><img src="image/Logo-wz-bk.png" alt="" /></a>
    <a id="space"></a>
    <a href="index.php">Home</a>
    <a href="booking.php">My Booking</a>
    <a href="contact.php">Contact Us</a>
    <a href="Login.php"> <button>Login</button></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <!--Body-->
  <div id="path">
    <div>
      <a href="index.php">Home</a>
    </div>
    <div>
      <p>/ My Booking</p>
    </div>
  </div>

  <div id="book">
    <h2>Print My Ticket</h2>
    <div class="ticket">
      <form action="retrieve.php" method="POST" name="bookprint" onsubmit="return(Checkbooking());">
        <h4>Enter Ticket Detail</h4>
        <div class="row">
          <ul>
            <li><label for="bookid">Guzoye Booking ID: </label></li>
            <li>
              <input type="text" placeholder="Booking ID" name="bookid" id="bookid" />
            </li>
            <li><label for="bookid">Mobile: </label></li>
            <li>
              <input type="text" placeholder="Mobile" name="custphone" id="bookphone" />
            </li>
            <li><button type="submit" name="Register" id="button-login">Retrieve</button></li>
          </ul>
        </div>
        <p id="bookidcheck"></p>
        <p id="bookpbonecheck"></p>
      </form>
    </div>
    <h2>Cancel Ticket</h2>
    <div class="ticket">
      <form name="bookcancel" method="POST" action="cancelbooking.php" onsubmit="return(cancelbooking());">
        <h4>Enter Ticket Detail</h4>
        <div class="row">
          <ul>
            <li><label for="bookid">Guzoye Booking ID: </label></li>
            <li>
              <input type="text" placeholder="Booking ID" name="bookid" id="bookidcancel" />
            </li>
            <li><label for="bookid">Mobile: </label></li>
            <li>
              <input type="text" placeholder="Mobile" name="custphone" id="bookphonecancel" />
            </li>
            <li><button type="submit" name="Register" id="button-login">Retrieve</button></li>
          </ul>
        </div>
        <p id="bookidcheck1"></p>
        <p id="bookpbonecheck1"></p>
      </form>
    </div>
  </div>
  <br /><br />
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
      <br />
    </div>
  </footer>

  <div id="footerbottom">
    <br />
    Copyright &copy; 2022. All Rights Reserved. <br />
  </div>
</body>

</html>