<?php
require_once 'connect.php';
session_start();
$Errorcode = $Error = null;
if (isset($_POST["login"])) {
  $Email = $_POST["email"];
  $password = $_POST["password"];
  $query = "SELECT * FROM administrator WHERE Email='$Email' and AdminPASSWORD='$password' ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['Email'] == $Email && $row['AdminPASSWORD'] == $password) {
      $_SESSION['AdminName'] = $row['AdminName'] . " " . $row['FatherName'];
      $_SESSION['Adminusername'] = $row['AdminName'] . $row['FatherName'];
      $_SESSION['Userid'] = $Email;
      header('location:Adminindex.php');
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
      <p>/ Login</p>
    </div>
  </div>

  <div id="AdminContiner">
    <img src="image/Icons/Admin.png" alt="AdminIcon" />
    <h3>Login as Admin</h3>
    <p style="color:red;">
      <?php
      if ($Errorcode == 1) {
        echo $Error;
      }
      ?>
    </p>
    <hr />
    <form action="" name="Adminform" method="POST" onsubmit="return(CheckloginAdmin());">
      <input type="email" name="email" id="AdminEmail" placeholder="Your Email" />
      <p id="checkEmail"></p>
      <input type="password" name="password" id="Adminpassword" placeholder="Password" />
      <p id="checkPassword"></p>
      <button name="login" id="submitbtn" type="submit">Login</button>
    </form>
  </div>
</body>

</html>