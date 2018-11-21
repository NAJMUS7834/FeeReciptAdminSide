
<!DOCTYPE html>
<html>
	<!-- Najmus Seemab-->
<head>

<style type="text/css">

body{
	margin: 5%;
	font-weight: bolder;

}
table {
border-collapse: collapse;
width: 100%;
text-transform: capitalize;
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
.icon{
	float: left;
}
input,select{
width:100%;
font-variant: small-caps;
text-transform: uppercase;
height:30px;
}
.submit {
	width: 100%;
	background: #ff5722;
	border-color: transparent;
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	letter-spacing: 2px;
	height: 50px;
	margin-top: 10px;
	font-size: 18px;
	margin-bottom: 16px;
	border: none;
	outline: none;
	border-bottom: 1px solid gray;
}

.submit:hover {
	background-color: #f44336;
	cursor: pointer;
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
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<div class="icon">
 <a href="status.html"><img src="status.png"  style="width:100px;height:100px;"> </a>
 <a href="emsIndex.php"><img src="refresh.png"  style="width:100px;height:100px;"> </a>
</div><br><br>

<form id='formid'  action="EMS.php"  method="post"  autocomplete="on">
<br><br><br><h2>ADMINSTRATOR PANNEL</h2>
<table >
<tr> <th>sid</th> <th>Faculty Name</th> <th>Branch</th> <th>Sem</th> <th>Section</th> <th>USN </th></tr>
<!---first row-------------------------------------------->
<tr><td><input type="text" id="sid" name="sid" required /></td>
<td><input type="text" id="name" name="name" required /></td>
<td>  <select name="branch" id="branch" >
    <option value="CSE">CSE</option>
    <option value="ISE">ISE</option>
    <option value="ECE">ECE</option>
    <option value="MECH">MECH</option>
	<option value="MECH">CIVIL</option>
	<option value="EEE">EEE</option>
  </select></td>
 <td> <select name="sem" id="sem" >
    <option value="1st">1st</option>
    <option value="2nd">2nd</option>
    <option value="3rd">3rd</option>
    <option value="4th">4th</option>
	<option value="5th">5th</option>
	<option value="6th">6th</option>
	<option value="7th">7th</option>
	<option value="8th">8th</option>
  </select></td>
 <td><select name="sec" id="sec" >
    <option value="A">A</option>
    <option value="B">B</option>
  </select>  </td>
 <td><input type="text" id="fusn" name="fusn"  required /></td></tr>
</table>
<input type="submit" class="submit"  value="SUBMIT"/>
</form>
<!--ajax started-->
    <script type='text/javascript'>
    /* attach a submit handler to the form */
    $("#formid").submit(function(event) {

      /* stop form from submitting normally */
      event.preventDefault();

      /* get the action attribute from the <form action=""> element */
      var $form = $( this ),
          url = $form.attr( 'action' );

      /* Send the data using post with element id name and name2*/

      var posting = $.post( url, { name1: $('#sid').val(), name2: $('#name').val(), name3: $('#branch').val(),
	  name4: $('#sem').val(), name5: $('#sec').val(), name6: $('#fusn').val()} );

      /* Alerts the results */
      posting.done(function(data){
        alert(data);
      });
    });
</script>
    
  <!--ajax close-->
    
<h2>Teachers Assigned</h2>
    <!--retriving from database-->
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
$result = mysqli_query($conn, "select * from emsdb") or die("Query fail :" .mysqli_error());
?>
<table  ><tr><th>ID</th> <th>NAME</th> <th>BRANCH</th> <th>SEM</th> <th>SEC</th> <th>From USN To USN</th> </tr>

<?php if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>"
	. $row["sid"]."</td><td>" . $row["name"] . "</td><td>".
	$row["branch"]. "</td><td>".$row["sem"]. "</td><td>".$row["sec"]. "</td><td>".
	$row["fusn"] . "</tr>" ;
    }
}

else {
    echo "0 results";
}

$conn->close();

?>
</table>
    <!--retrive close-->
<footer class="second">
    <p>&copyVVCE:devloped by Getways Solution</p>
</footer>
    </body>
</html>
