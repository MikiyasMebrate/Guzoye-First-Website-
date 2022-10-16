<?php
session_start();
include('connect.php');
if (isset($_POST['Yes'])) {
    $BusId = $_SESSION['Busid'];
    $query1 = "DELETE from book where book.BUSID =  $BusId;";
    $query2 = "DELETE from driver WHERE driver.BusID =  $BusId;";
    $query3 = "DELETE from bus WHERE bus.BusID =  $BusId;";
    if (mysqli_query($conn, $query1)) {
        if (mysqli_query($conn, $query2)) {
            if (mysqli_query($conn, $query3)) {
                header('location:Adminbus.php');
            }
        }
    }
} else if (isset($_POST['No'])) {
    header('location:Adminbus.php');
}
?>
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
            background-color: #FFC107;
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

        #deletebus input {
            background-color: white;
            border-color: white;
            height: 30px;
            padding-left: 30px;
            padding-right: 30px;
            font-size: 18px;
            cursor: pointer;
            margin: 10px;
        }

        #deletebus input:hover {
            background-color: rgba(221, 44, 0, 0.87);
            border-color: rgba(221, 44, 0, 0.87);
            color: white;
        }
    </style>
</head>

<body>
    <div id="deletebus">
        <p>Are you sure! You want to delete this Bus.</p>
        <p>It can Affect other rows!</p>
        <form action="" method="POST">
            <input type="submit" name="Yes" value="Yes">
            <input type="submit" name="No" value="No">
        </form>
    </div>
</body>