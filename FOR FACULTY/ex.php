
<?php
// Start the session
session_id('mySessionID'); //SET id first before calling  session start
session_start();
?>
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

  .submit
  {
  	width:100%;
  	background:#ff5722;
  	border-color:transparent;
  	color:#fff;
  	font-size:20px;
  	font-weight:bold;
  	letter-spacing:2px;
  	height:50px;
  	margin-top:10px;
  	font-size:18px;
  	margin-bottom:16px;
  	border:none;
  	outline:none;
  	border-bottom:1px solid gray;
  }

  .submit:hover
  {
  	background-color:#f44336;
  	cursor:pointer;
  }
  </style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new1";
$usn = $_POST["usn"];
// Set session variables
$_SESSION["usn"] = "$usn";


// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, "select * from studentdb where studentdb.usn='$usn'") or die("Query fail :" .mysqli_error());
?>
        <table class="container"><tr><th>usn</th><th>Sem</th><th>Branch</th><th>Sec</th><th>Recived</th><th>UPLOADED</th></tr>

<?php if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["usn"]. "</td><td>" . $row["sem"]. "</td><td> " . $row["branch"]. "</td><td>" . $row["sec"]. "</td><td>" . $row["recived"]."</td><td>" . $row["uploaded"] ."</td></tr>";
    }

} else {
    echo "0 results";
}

$conn->close();

?>
</table>
<form action="update.php" method="post" autocomplete="on">
<div class="last"><br><br>
Form Recived<br><select name="branch" id="recived" >
    <option value="Yes">Yes</option>
    <option value="No">No</option>

  </select><br>
Uploaded to VTU Portal:<br><select name="branch" id="uploaded" >
    <option value="Yes">Yes</option>
    <option value="No">No</option>
 <br><br><br></select>
</div>
<input type="submit"  class="submit"  value="Submit"/>
</form>



    </body>
</html>
