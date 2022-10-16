  <?php
  include 'connect.php';
  include 'Busresult.php';
  if (isset($_POST['Searchroute'])) {
    $Start = $Destination = $Date = "";
    $Start = $_POST['myCountry'];
    $Destination = $_POST['DesCountry'];
    $Date = $_POST['dateroute'];
    $_SESSION['numpass'] = $_POST['numpas'];
  ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Document</title>
      <link rel="stylesheet" href="CSS/Stylesheet.css" />
    </head>

    <body>
      <div class="topnav" id="myTopnav">
        <a href="index.php
      " class="active"><img src="image/Logo-wz-bk.png" alt="" /></a>
        <a id="space"></a>
        <a href="index.php
      ">Home</a>
        <a href="booking.php
      ">My Booking</a>
        <a href="contact.php
      ">Contact Us</a>
        <a href="Login.php
      ">
          <button>Login</button></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <div id="Lists">
        <p>Results</p>
      </div>

      <?php
      $sql = "SELECT bus.BusID, travel.StartingPoint, travel.Destination, travel.TravelDate,bus.BusName,bus.BusNumber,travel.Amount
              from travel JOIN bus on bus.TravelID=travel.TravelID
              where  travel.StartingPoint ='$Start' and  travel.Destination = '$Destination' and travel.TravelDate= '$Date'";
      $result = $conn->query($sql);

      ?>
      <style>
        #Lists {
          clear: both;
          margin-top: 20px;
          max-width: 500px;
          margin-right: auto;
          margin-left: auto;
          box-shadow: 0px 10px 30px gray;
        }

        #Lists p {
          margin: 0;
          text-align: center;
          font-size: 120%;
        }

        #cardbook {
          background-color: #fefefa;
          margin-left: auto;
          margin-right: auto;
          margin-top: 20px;
          max-width: 1020px;
          border-radius: 20px;
          box-shadow: 0px 10px 30px gray;
        }

        #cards {
          display: inline-table;
          overflow: hidden;
        }

        #cards label {
          position: relative;
          margin-left: 30px;
          top: 10px;
          font-size: 100%;
        }

        #error p {
          text-align: center;
          position: relative;
          font-size: 120%;
          padding-bottom: 10px;


        }

        #cards a {
          margin-left: auto;
          margin-right: auto;
        }

        #cardbook button {
          position: relative;
          top: 40px;
          height: 40px;
          width: 120px;
          color: white;
          font-size: 15.5px;
          background-color: #002fff;
          border-radius: 9px;
          border-color: #1d45fa;
          opacity: 0.7;
          transition: 0.4s;
        }

        #cardbook button:hover {
          cursor: pointer;
          opacity: 1;
        }
      </style>
      <?php

      if ($result->num_rows > 0) { ?>
        <?php
        while ($row = $result->fetch_assoc()) { ?>

          <div id="cardbook">
            <form name="buschedulee" method="POST" action="">
              <div id="cards">
                <label>FROM</label>
                <p><?php echo $row["StartingPoint"] ?></p>
              </div>

              <div id="cards">
                <label>TO</label>
                <p><?php echo $row["Destination"] ?></p>
              </div>

              <div id="cards">
                <label>Travel Date</label>
                <p><?php echo $row["TravelDate"] ?></p>
              </div>

              <div id="cards">
                <label>Bus Name</label>
                <p><?php echo $row["BusName"] ?></p>
              </div>


              <div id="cards">
                <label>Bus Number</label>
                <p><?php echo $row["BusNumber"] ?></p>
              </div>

              <div id="cards">
                <label>Amount</label>
                <p><?php echo $row["Amount"] ?>.00Birr</p>
              </div>
              <input type="hidden" name="BusNum" value="<?php echo $row["BusID"] ?>">
              <button name="setbus" id="btnsub" type="submit">Book</input>
          </div>
          </form>
          </div>
        <?php
        }
      } else {
        ?>
        <div id="cardbook">
          <div id="error">
            <p style="color:red;">Sorry! <br>No Bus Assigned for This Day. Please Try Again on Other Dates.</p>
            <p> <a href="index.php"> <button>Home</button></a></p>
            <br>
          </div>
        </div>
      <?php
      }
      $conn->close();
      ?>
      </div>
      </div>
    </body>

    </html>
  <?php }


  if (isset($_POST['setbus'])) {
    $BusNum = $_POST['BusNum'];
    $UserID = $_SESSION['Userid'];
    $date = date("Y/m/d") . "<br>";
    $NumPass = $_SESSION['numpass'];


    $querybook = "INSERT INTO BOOK  (NumofPassenger, BOOKDATE, BUSID, CUSTOMERID)
                  VALUES
                   ('$NumPass','$date','$BusNum','$UserID')";
    if (mysqli_query($conn, $querybook)) {
      $bookid = "SELECT * from book WHERE book.CUSTOMERID = $UserID  AND book.NumofPassenger = $NumPass AND book.BOOKDATE='$date'";
      if ($result = mysqli_query($conn, $bookid)) {
        $row = $result->fetch_assoc();
        $_SESSION['bookidtik'] = $row['BOOKID'];
        header("Location:Booked.php");
        mysqli_close($conn);
        exit();
      }
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  }

  ?>