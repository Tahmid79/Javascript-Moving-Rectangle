<!DOCTYPE html>

<html>

<head>
      <title>PHP</title>
    <!-- Latest compiled and minified CSS -->

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <style>
        .container{

            border-style: double;
            border-radius: 5px;
            background-image: radial-gradient(#fdffff, rgba(5, 6, 23, 0.57));
            box-shadow: inset 0 0 20px black;
        }

        .table{

        }



    </style>
</head>

<body>

<?php

$servername = "localhost"	;
$username = "root"	;
$password = ""	;
$database = "people" ;

// Create connection



$mysqli =  mysqli_connect("localhost" , $username, $password );

if (!$mysqli) {
    die("Connection failed: ". mysqli_connect_error() );
}
else {
    echo "<h4>Connected successfully</h4></br>" ;
}



mysqli_select_db($mysqli,$database) ;

// Check connection


?>

<br/>

<div class = "container" >
    <table class = "table">

<?php


        echo "<tr>"  ;
        echo  "<th>FirstName</th>" ;
        echo  "<th>LastName</th>" ;

        $query2 = "SELECT * FROM student" ;
        $result = $mysqli->query($query2) ;

        $num = mysqli_num_rows($result) ;


        while ($row = mysqli_fetch_assoc($result)  ) {

            echo "<tr>" ;
            echo "<td>" .$row["fname"]  . "</td>"  ;
            echo "<td>" .  $row["lname"] .  "</td>" ;
            echo "</tr>" ;

        }



        ?>

    </table>
</div>

</body>

</html>




