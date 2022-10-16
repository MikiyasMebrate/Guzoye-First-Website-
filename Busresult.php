<?php
session_start();
if (!$_SESSION['Userid']) {
    header("Location: login.php");
    exit();
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
    <link rel="icon" href="image/icon-logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="CSS/Stylesheet.css" />
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
    <div class="main" id="main">
        <h1>Book Bus Tickets</h1>
    </div>
    <div id="card">
        <div id="maincontent">
            <form name="searchroute" method="POST" action="" onsubmit="return(Checkroute());">
                <div class="Title">
                    <div class="in">
                        <label for="Start">From</label>
                        <br />
                        <input autocomplete="false" type="text" id="Start" name="myCountry" placeholder="Select Your Origin." />
                    </div>

                    <div class="in">
                        <label for="Destination">To</label>
                        <br />
                        <input autocomplete="false" type="text" id="Destination" name="DesCountry" placeholder="Select Your Origin." />
                    </div>
                    <div class="in">
                        <label for="num">Passengers</label>
                        <br />
                        <input id="num" name="numpas" type="number" placeholder="Number of Passengers" id="num" min="1" max="10" />
                    </div>
                    <div class="in">
                        <label for="date">Date</label>
                        <br />
                        <input type="date" name="dateroute" id="date" />
                    </div>
                    <button name="Searchroute" type="submit">Search</button>
                </div>
                <p id="checkstart"></p>
                <p id="checkdestination"></p>
                <p id="checkpass"></p>
                <p id="checkdate"></p>
            </form>
        </div>
    </div>

    <script>
        autocomplete(document.getElementById("Start"), countries);
        autocomplete(document.getElementById("Destination"), countries);
    </script>

    <style>
        /**/
        .autocomplete-items {
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        .autocomplete-items div:hover {
            /*when hovering an item:*/
            background-color: #e9e9e9;
        }

        .autocomplete-active {
            /*when navigating through the items using the arrow keys:*/
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>

</body>

</html>