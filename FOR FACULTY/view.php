
<!DOCTYPE html>
<html>
<style type="text/css">
 body{
   margin: 5%;
   font-weight: bolder;
 }
 table {
 border-collapse: collapse;
 width: 100%;
}

th, td {
 text-align: left;
 padding: 8px;
   border-bottom: 1px solid #ddd;
}
tr:hover {background-color:#c05a88;
}

th {
 background-color: #4CAF50;
 color: white;
}


</style>
<body>
 <a href="FacultyIndex.html"><img src="backButton.png"  style="width:150px;height:70px;"> </a>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new1";

// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, "select * from emsdb ") or die("Query fail :" .mysqli_error());
?>


<table  ><tr><th>ID</th> <th>NAME</th> <th>BRANCH</th> </tr>

<?php if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>"
	. $row["sid"]."</td><td>" . $row["name"] . "</td><td>".
	$row["branch"] ."</tr>
		" ;
    }
}

else {
    echo "0 results";
}

$conn->close();

?>
</table>
    </body>
</html>
