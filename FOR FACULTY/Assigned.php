<?php
session_id('mySessionID'); //SET id first before calling  session start
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
$result = mysqli_query($conn, "select * from emsdb where emsdb.sid='$name' OR emsdb.name='$name'") or die("Query fail :" .mysqli_error());
?>
  <table><tr><th>ID</th> <th>Faculty Name</th> <th>SEM</th> <th>Branch</th> <th>section</th> <th>from USN to USN </th></tr>

<?php if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>"
	. $row["sid"]."</td><td>" . $row["name"] . "</td><td>".
	$row["sem"] . "</td><td>" .
		$row["branch"]. "</td><td>" . $row["sec"]. "</td><td>" . $row["fusn"]."</tr>" ;

$_SESSION['from'] = $row["fusn"];
$_SESSION['from1'] = $row["name"];
$_SESSION['from2'] = $row["sec"];
$_SESSION['from3'] = $row["sid"];
$_SESSION['from4'] = $row["sem"];
$_SESSION['from5'] = $row["branch"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table><br>

<!doctype html>
<html>
    <head>
	<style type="text/css">
	h1{

text-align:center;
  font-family:"sans-serif";

}

form{
text-align:center;

}

input{
 width:50%;
 height:30px;
 margin-top:15px;
}

.submit
{
	width:600px;
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
.register{
margin-top:10%;
text-align:center;

}


footer.second{

	background-color:#544b59;
	max-height:55px;
	margin: 0;
	align:bottom;

}
footer.second p{

	text-align:center;

}
	</style>

</head>

<body>

<form action="faculty1.php" method="post" class="form__field" autocomplete="on">
 SEM:
  <select name="sem" id="sem" >
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4th">4th</option>
	<option value="5th">5th</option>
	<option value="6th">6th</option>
	<option value="7th">7th</option>
	<option value="8th">8th</option>
  </select>
 BRANCH:
  <select name="branch" id="branch" >
    <option value="CSE">CSE</option>
    <option value="ISE">ISE</option>
    <option value="ECE">ECE</option>
    <option value="MECH">MECH</option>
	<option value="MECH">CIVIL</option>
	<option value="EEE">EEE</option>
  </select>

<input type="submit" class="submit"  value="Auto-Fill"/>

</form>
		<footer class="second">
    <p>&copyVVCE:devloped by Najmus Seemab</p>
</footer>
</body>
</html>

            </table>

    </body>
</html>
