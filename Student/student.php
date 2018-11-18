<!--DOCTYPE html-->
<html>
<head>
<style type="text/css">
body{
	margin-left:10%;
	margin-right:10%;
}
h2{
	align:center;
}
footer.second{

	background-color:#544b59;
	max-height:55px;
	margin: 0;
}
footer.second p{

	text-align:center;

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
// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, "select * from studentdb where studentdb.usn='$usn'") or die("Query fail :" .mysqli_error());
?>
 <h2>Exam Fees Status</h2>


<?php if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<strong>USN:</strong>"
	. $row["usn"]."<strong> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;SEM:</strong>" . $row["sem"] . "<strong>&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;BRANCH:</strong>".
	$row["branch"] . "<strong> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;SEC:</strong>" . $row["sec"]. "<br><strong>Faculty Name:</strong>" .
	$row["fname"]. "<strong> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Recived:</strong>" . $row["recived"]. "<strong> &nbsp;&nbsp;&nbsp; &nbsp;Uploaded:</strong>" . $row["uploaded"]
	. "<br><br><strong>Regular Subjects</strong><br><br>" . $row["sub1"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub1c"]."<br>". $row["sub2"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub2c"]."<br>"
	. $row["sub3"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub3c"]."<br>". $row["sub4"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub4c"]."<br>". $row["sub5"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub5c"]."<br>"
	. $row["sub6"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub6c"]."<br>". $row["sub7"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub7c"]."<br>"
	. $row["sub8"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub8c"]."<br><strong>Elective Subjects</strong><br>". $row["sub9"]."<br>". $row["sub10"]."<br>".
	$row["sub11"]."<br>".$row["sub12"]."<br>".$row["sub13"]."<br>".$row["sub14"]."<br>".$row["sub15"]."<br>".$row["sub16"]
	."<br><strong>Back-Logs</strong><br>". $row["sub17"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub17c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem1"]
	.$row["sub18"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub18c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem2"]
	. $row["sub19"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub19c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem3"]
	.$row["sub20"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub20c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem4"]
	.$row["sub21"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub21c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem5"]
	.$row["sub22"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub22c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem6"]
	.$row["sub23"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub23c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem7"]
	.$row["sub24"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sub24c"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row["sem8"];
    }
} else {
    echo "fees status not-found/not-submited/not-uploaded";
}

$conn->close();

?>   <footer class="second">
    <p>&copyVVCE:devloped by Najmus Seemab</p>
</footer>
    </body>
</html>
