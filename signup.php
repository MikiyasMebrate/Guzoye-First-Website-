<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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

    <div id="path">
      <div>
        <a href="index.php">Home</a>
        <a href="Login.php"> &nbsp; &nbsp; / Login</a>
      </div>
      <div>
        <p>/ Signup</p>
      </div>
    </div>

    <div id="User_signup">
      <div>
        <img src="image/Icons/Signup.gif" alt="" /> <br />
        <p>What you can do as a member?</p>
        <ul>
          <li>
            Book tickets without the need to fill in the details everytime.
          </li>
          <li>Update your Profile/Password</li>
          <li>View yout past trabsactions/Purchases</li>
        </ul>
        <br />
        <br /><br /><br /><br /><br />
        <br />
        <br />
      </div>
      <div id="Sign-Form">
        <h2>Signup</h2>
        <form id="form" name="form" action="newuser.php" method="POST" onsubmit="return(Checkform());">
          <input type="text" placeholder="First Name" name="firstname" id="name" />
          <p id="namecheck"></p>
          <input type="text" placeholder="Father Name" name="fathername" id="fname" />
          <p id="fnamecheck"></p>
          <input type="tel" placeholder="Phone Number" name="phonenumber" id="phone" />
          <p id="telcheck"></p>
          <input type="email" placeholder="Email" name="email" id="uemail" />
          <p id="eamilcheck"></p>
          <input
            type="password"
            placeholder="Password"
            name="password1"
            id="upassword"
          />
          <p id="passwordcheck"></p>
          <input
            type="password"
            placeholder="Confirm Password"
            name="password2"
            id="upassword1"
          />
          <p id="password1check"></p>
          <br />
          <br />
          <br />
          <button type="submit" name="Register" id="submitbtn">Signup</button>
          <br />
          <br />
          <br />
          <br />
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
