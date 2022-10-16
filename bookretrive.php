<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: login.php");
    exit();
}

include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Guzoye Ticket</title>
    <link rel="stylesheet" href="CSS/Stylesheet.css" />
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>

<body>



    <?php

    $Boookid = $_SESSION['bookidtik'];
    $sql = "SELECT * from customertravel
              where bookid=$Boookid";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
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
                                <p><?php echo $row["BOOKID"] ?></p>
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
                <a id="btnposition" href="Searchbus.php"><button id="submitbtn">Home</button></a>
                <a id="btnposition"><button onclick="printPage()" id="submitbtn">Print</button></a>
            </div>
    <?php
        }
    }
    mysqli_close($conn);
    exit();
    ?>
</body>

</html>