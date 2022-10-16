<?php 

//index.php

$connect = new PDO("mysql:host=localhost; dbname=busreservation", "root", "");

$query = "
SELECT DISTINCT  travel.StartingPoint
    FROM travel 
";

$result = $connect->query($query);

$data = array();

foreach($result as $row)
{
    $data[] = array(
        'label'     =>  $row['StartingPoint'],
        'value'     =>  $row['StartingPoint']
    );
}

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="library/bootstrap-5/bootstrap.min.css" rel="stylesheet" />
        <script src="library/bootstrap-5/bootstrap.bundle.min.js"></script>
        <script src="library/autocomplete.js"></script>

        <title>Typeahead Autocomplete using JavaScript in PHP for Bootstrap 5</title>
    </head>
    <body>

        <div class="container">
            <h1 class="mt-2 mb-3 text-center text-primary">Typeahead Autocomplete using JavaScript in PHP for Bootstrap 5</h1>
            <div class="row">
                <div class="col-md-3">&nbsp;</div>
                <div class="col-md-6">
                    <input type="text" name="country_name" id="country_name" class="form-control form-control-lg" placeholder="Country Name" />
                </div>
                <div class="col-md-3">&nbsp;</div>
            </div>      
            <br />
            <br />
        </div>
    </body>
</html>

<script>

var auto_complete = new Autocomplete(document.getElementById('country_name'), {
    data:<?php echo json_encode($data); ?>,
    maximumItems:10,
    highlightTyped:true,
    highlightClass : 'fw-bold text-primary'
}); 

</script>