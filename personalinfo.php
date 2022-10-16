<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: login.php");
    exit();
}
include('connect.php');
$Custid = $_SESSION['Userid'];
$sql = "SELECT customer.CutID, customer.CustName,customer.FatherName, customer.Phone, customer.Email, CustPASSWORD
              from customer 
                where CutID = '$Custid' 
                order by CustName,FatherName ";
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
< <head>
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
            <a class=" active"><img src="image/Logo-wz-bk.png" alt="" /></a>
            <a style="color: #1d45fa;  opacity: 1; ">Welcome <?php echo $_SESSION['Username'] ?> </a>
            <a id="space"></a>
            <a href="personalinfo.php
      ">Personal Information</a>
            <a href="sessiondestroy.php"><button id="logout">logout</button></a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>

        <div id="personalinfo">
            <h2>Personal Information</h2>
            <div class="row">
                <label for="name">First Name:</label>
                <p><?php echo $row['CustName'] ?></p>
            </div>
            <div class="row">
                <label for="name">Father Name:</label>
                <p><?php echo $row['FatherName'] ?></p>
            </div>
            <div class="row">
                <label for="name">Phone:</label>
                <p> <?php echo $row['Phone'] ?></p>
            </div>
            <div class="row">
                <label for="name">Email:</label>
                <p><?php echo $row['Email'] ?> </p>
            </div>
            <div class="row">
                <label for="name">Password:</label>
                <p><?php echo $row['CustPASSWORD'] ?> </p>
            </div>
            <a href="editpersonalinfo.php"> <button>Edit</button></a>
            <a href="Searchbus.php"><button>Back</button></a>
        </div>
    </body>

    <style>
        #personalinfo {
            box-shadow: 0 0 10px gray;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
            margin-top: 100px;
            clear: both;
        }

        #personalinfo p {
            color: black;
            margin: 10px;
        }

        .row {
            display: table-row;
        }

        .row label {
            text-align: left;
            display: table-cell;
            padding: 10px;
            padding-left: 200px;
        }

        .row p {
            text-align: left;
            display: table-cell;
        }

        #personalinfo button {
            height: 40px;
            width: 100px;
            color: white;
            font-size: 15.5px;
            background-color: #002fff;
            border-radius: 9px;
            border-color: #1d45fa;
            opacity: 0.7;
            transition: 0.4s;
            margin-bottom: 20px;
            margin-top: 30px;
        }

        #personalinfo button:hover {
            cursor: pointer;
            opacity: 1;
        }
    </style>

</html>