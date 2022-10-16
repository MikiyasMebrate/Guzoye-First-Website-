<?php
include 'connect.php';

if (isset($_POST['Register'])) {
  $FirstName = $FatherName = $Phonenumber = $Email = $password1 = "";
  $FirstName = $_POST['firstname'];
  $FatherName = $_POST['fathername'];
  $Phonenumber = $_POST['phonenumber'];
  $Email = $_POST['email'];
  $password1 = $_POST['password1'];
}

$sqlusertest = "SELECT * from customer where Email = '$Email'";
$result = mysqli_query($conn, $sqlusertest);
if ($result->num_rows == 1) { ?>
  <!DOCTYPE html>

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
    <style>
      #deletebus {
        background-color: white;
        max-width: 700px;
        box-shadow: 0 0 10px gray;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
        text-align: center;
      }

      #deletebus p {
        text-align: center;
        color: black;
        font-size: 20px;
        margin: 0;
      }

      #button-login {
        height: 40px;
        width: 150px;
        color: white;
        font-size: 15.5px;
        background-color: #002fff;
        border-radius: 9px;
        border-color: #1d45fa;
        opacity: 0.7;
        transition: 0.4s;
        margin: 20px;
      }

      #button-login:hover {
        cursor: pointer;
        opacity: 1;
      }
    </style>
  </head>

  <body>
    <div id="deletebus">
      <p>This user is exist!, please try to Login.</p>
      <p>Or try other Email.</p>
      <a href="login.php"><input type="submit" id="button-login" value="Continue"></a>
    </div>
  </body> <?php
        } else {

          $sql = "INSERT INTO customer (CustName, FatherName, Phone, Email, CustPassword)
VALUES ('$FirstName', '$FatherName', '$Phonenumber','$Email','$password1')";

          if (mysqli_query($conn, $sql)) {
            mysqli_close($conn);
            header("Location: /GUZOYE/AccountCreate.php");
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
        }
