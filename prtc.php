<?php


$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$database = "people" ;

$conn = mysqli_connect($servername, $username , $password);

if(!$conn){
    die("Connection failed" . mysqli_connect_error() )  ;
}
else {
    echo "Connected successfully</br>" ;
}

mysqli_select_db($conn, $database) ;


$query = "SELECT * FROM `student`;" ;
$result = $conn->query($query);


$num = mysqli_num_rows($result) ;
echo $num ."</br>";
echo"</br>" ;

echo "<table>" ;
    echo "<tr>" ;
        echo "<th>First Name</th>" ;
        echo"<th>Last Name</th>";
    echo "</tr>" ;


while($row = mysqli_fetch_assoc($result)){

    echo"<tr>" ;
        echo "<td>".$row["fname"]."</td>" ;
        echo "<td>".$row["lname"]."</td>" ;
    echo"</tr>" ;
}

    echo "</table>" ;

?>