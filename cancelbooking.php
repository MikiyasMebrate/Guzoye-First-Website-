  <?php
    session_start();
    include 'connect.php';
    if (isset($_POST['Register'])) {
        $Bookid = $custphone = "";

        $Bookid = $_POST['bookid'];
        $custphone = $_POST['custphone'];
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
      <script>
          function printPage() {
              window.print();
          }
      </script>
  </head>

  <body>



      <?php $sql = "SELECT * from customertravel
              where Phone = '$custphone' and BOOKID='$Bookid'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) { ?>
              <div id="ticketcontainer">
                  <div id="ticketupper">
                      <h4>Guzoye</h4>
                      <img src="image/Icons/icon-bus.png" alt="" />
                      <p>
                          Starting Point:
                          <?php echo $row["StartingPoint"] ?>
                      </p>
                      <p>
                          Destination:
                          <?php echo $row["Destination"] ?>
                      </p>
                  </div>
                  <div id="contenttravel">
                      <table id="tableprint">
                          <tr>
                              <td>
                                  <p>Book ID:</p>
                              </td>
                              <td>
                                  <p><?php $_SESSION['bookid'] = $row["BOOKID"];
                                        echo $row["BOOKID"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Customer Name:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["CustName"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Father Name:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["FatherName"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Phone:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["Phone"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Passengers:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["NumofPassenger"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Travel Date:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["TravelDate"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Bus Name:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["BusName"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Bus Number:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["BusNumber"] ?></p>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <p>Total Amount:</p>
                              </td>
                              <td>
                                  <p><?php echo $row["TotalAmount"] ?>.00 Birr</p>
                              </td>
                          </tr>
                      </table>
                  </div>
                  <a id="btnposition" href="index.php"><button id="submitbtn">Home</button></a>
                  <a id="btnposition" href="deletebooking.php"><button id="submitbtn">Cancel Booking</button></a>
              </div>
          <?php
            }
        } else {
            ?>


          <div id="errorretive">
              <img src="image/Icons/remove.png" alt="">
              <h1>Sorry!</h1>
              <p>The user you input does not exist!</p>
              <p>Please go back and try again.</p>
              <a href="booking.php"> <button id="OK">OK</button> </a>
          </div>

      <?php
        }

        mysqli_close($conn);
        exit();
        ?>
  </body>

  </html>