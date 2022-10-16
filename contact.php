<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Book Bus Tickets Online at Lowest Price| Guzoye</title>
    <script
      src="https://kit.fontawesome.com/47080b3c1e.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="CSS/Stylesheet.css" />
    <link rel="icon" href="image/icon-logo.png" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="js/scripts.js"></script>
  </head>
  <body>
    <div class="topnav" id="myTopnav">
      <a href="index.php" class="active"
        ><img src="image/Logo-wz-bk.png" alt=""
      /></a>
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
        <p>/ Contact</p>
      </div>
    </div>

    <!--Email-->

    <div id="con-email">
      <img src="image/Icons/email.png" alt="" />
      <h1>Get in touch</h1>
      <h3>We'd love to hear from you</h3>

      <form
        class="in"
        name="contact"
        action="contactsend.php" method="POST" 
        onsubmit="return(Checkcontact());"
      >
        <input type="text" id="name" name="fname" placeholder="Full name" />
        <p id="checkname"></p>
        <input type="email" id="email" name="email" placeholder="Email address" />
        <p id="checkemail"></p>
        <input type="tel" id="phone" name="phone"  placeholder="Phone number" />
        <p id="checkphone"></p>
        <textarea id="message" name="message" placeholder="Message"></textarea>
        <p id="checkmessage"></p>
        <button id="button-login" name="Register" type="submit" class="contsub">Submit</button>
        <br />
        <br />
        <br />
      </form>
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
