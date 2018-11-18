<?php
session_id('mySessionID');
session_start();?>
<!DOCTYPE html>
<html>
<head>
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
</head>
<body>
   <a href="FacultyIndex.html"><img src="backButton.png"  style="width:150px;height:70px;"> </a>
<?php
$name3 = $_SESSION['from3'];
?>
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
$result = mysqli_query($conn, "select * from studentdb where studentdb.sid='$name3' OR studentdb.fname='$name3'") or die("Query fail :" .mysqli_error());
?>
<table  ><tr><th>USN</th> <th>UPLOAD</th> <th>SEM</th> <th>Branch</th> <th>section</th> <th>RECIVED</th> <th>faculty Name</th></tr>
<?php if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>"
	. $row["usn"]."</td><td>" . $row["uploaded"] . "</td><td>".
	$row["sem"] . "</td><td>" .
		$row["branch"]. "</td><td>" . $row["sec"]. "</td><td>" . $row["recived"]."</td><td>" . $row["fname"]."</tr>
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
