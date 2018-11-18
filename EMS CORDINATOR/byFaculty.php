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
h2{
text-align: center;
background-color: #0074D9;
color:#ffffff;
}
  </style>
</head>
<body>
    <a href="status.html"><img src="backButton.png"  style="width:100px;height:100px;"> </a>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new1";
$name = $_POST["name"];
// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, "select * from studentdb where studentdb.sid='$name' OR studentdb.fname='$name'") or die("Query fail :" .mysqli_error());
?>
<h2>RECIPTS STATUS BY FACULTY ID/NAME</h2>
<table ><tr><th>USN</th> <th>SEM</th> <th>Branch</th> <th>section</th> <th>RECIVED</th>  <th>UPLOAD</th> <th>fname</th> <th>ID</th></tr>

<?php if ($result->num_rows > 0) {


    while($row = $result->fetch_assoc()) {

      if($row["recived"]=="Yes" &&  $row["uploaded"]=="Yes"){

	 echo "<tr style='color:green;'><td>". $row["usn"]."</td><td>"  . $row["sem"] . "</td><td>" .
	$row["branch"]. "</td><td>" . $row["sec"]. "</td> <td>" . $row["recived"]."</td><td>". $row["uploaded"]."</td><td>".$row["fname"]."</td><td>".$row["sid"]."</tr>" ;

    }
    elseif($row["recived"]=="Yes" && $row["uploaded"]=="No"){
 echo "<tr style='background:#7FDBFF;'><td>". $row["usn"]."</td><td>"  . $row["sem"] . "</td><td>" .
$row["branch"]. "</td><td>" . $row["sec"]. "</td> <td>" . $row["recived"]."</td><td>". $row["uploaded"]."</td><td>".$row["fname"]."</td><td>".$row["sid"]."</tr>" ;

  }
    else {
      echo "<tr style='background:red; color:white;'><td>". $row["usn"]."</td><td>"  . $row["sem"] . "</td><td>" .
   	$row["branch"]. "</td><td>" . $row["sec"]. "</td> <td>" . $row["recived"]."</td><td>". $row["uploaded"]."</td><td>".$row["fname"]."</td><td>".$row["sid"]."</tr>" ;

    }
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
