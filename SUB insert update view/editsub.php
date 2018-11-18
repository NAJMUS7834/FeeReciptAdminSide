<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new1";
$sem = $_POST["sem"];
$branch= $_POST["branch"];
// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn, "select * from subdb where subdb.sem='$sem' And subdb.branch='$branch'") or die("Query fail :" .mysqli_error());
?>
    <?php
	 while($rowval = mysqli_fetch_array($result))
 {
$sem= $rowval['sem'];
$branch= $rowval['branch'];
$sub1= $rowval['sub1'];
$sub1c= $rowval['sub1c'];
$sub2= $rowval['sub2'];
$sub2c= $rowval['sub2c'];
$sub3= $rowval['sub3'];
$sub3c= $rowval['sub3c'];
$sub4= $rowval['sub4'];
$sub4c= $rowval['sub4c'];
$sub5= $rowval['sub5'];
$sub5c= $rowval['sub5c'];
$sub6= $rowval['sub6'];
$sub6c= $rowval['sub6c'];
$sub7= $rowval['sub7'];
$sub7c= $rowval['sub7c'];
$sub8= $rowval['sub8'];
$sub8c= $rowval['sub8c'];
$sub9= $rowval['sub9'];
$sub9c= $rowval['sub9c'];
$sub10= $rowval['sub10'];
$sub10c= $rowval['sub10c'];
$sub11= $rowval['sub11'];
$sub11c= $rowval['sub11c'];
$sub12= $rowval['sub12'];
$sub12c= $rowval['sub12c'];
$sub13= $rowval['sub13'];
$sub13c= $rowval['sub13c'];
$sub14= $rowval['sub14'];
$sub14c= $rowval['sub14c'];
$sub15= $rowval['sub15'];
$sub15c= $rowval['sub15c'];
$sub16= $rowval['sub16'];
$sub16c= $rowval['sub16c'];
}
$conn->close();
?>


<!--doctype html-->
  <html>
	  <head>
	  <style type="text/css">
	.sub{
		  width:100%;
		  height:30px;
	  }
	  .subc{
		  height:30px;
	  }
	  .regular{
		  width:33%;
		  float:left;
	  }
	  .elective{
		  width:33%;
		    float:left;
	  }
	  .one-half{
		  width=33%;
		  float:left;
	  }
	  body{
		  margin-left:5px;
		  margin-right:5px;
	  }
	  </style>


	  </head>
<body>

<form action="subupdate.php" method="post" class="form__field"  >
            <td style="color:black;padding-left:5px;" class="auto-style3">Sem:</td>
            <td class="auto-style1">
                <input type="search" name="sem" id="sem" class="sem" type="text" value='<?php echo  $sem;  ?>'/></td>
				       <td style="color:black;padding-left:5px; width:40%;" class="auto-style3 ">Branch:</td>
            <td class="auto-style1">
			                <input type="search" name="branch" id="branch" class="branch" type="text" value='<?php echo  $branch; ?>'/></td>
		<h2>Regular Subjects</h2>
		<table  name="regular" id="regular" class="regular" style="color:black; height:150px;width:50%"  >
         <tr><td> Subjects </td> <td> Sub Code </td></tr>
<!---1st -------------------------------------------------------------------->
        <tr>
            <td class="auto-style4" >
                <input type="search" class="sub" name="sub1" id="sub1" type="text" value='<?php echo  $sub1; ?>' /></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub1c" id="sub1c" type="text" value='<?php echo  $sub1c; ?>' /></td>
				</tr>
<!---2nd -------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
               <input type="search" class="sub" name="sub2" id="sub2" type="text" value='<?php echo $sub2;?>' /></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub2c" id="sub2c" type="text" value='<?php echo  $sub2c; ?>' ></td>
        </tr>
<!---3rd -------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
                <input type="search" class="sub" name="sub3" id="sub3" type="text" value='<?php echo  $sub3; ?>'/></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub3c" id="sub3c" type="text" value='<?php echo  $sub3c; ?>' /></td>
        </tr>
<!---4th-------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
                <input type="search" class="sub" name="sub4" id="sub4" type="text"  value='<?php echo  $sub4; ?>'/></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub4c" id="sub4c" type="text" value='<?php echo  $sub4c; ?>'/></td>
        </tr>
<!---5th-------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
                <input type="search" class="sub" name="sub5" id="sub5" type="text" value='<?php echo  $sub5; ?>'/></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub5c" id="sub5c" type="text" value='<?php echo  $sub5c; ?>'/></td>
        </tr>
<!--6th -------------------------------------------------------------------->
        <tr>
            <td class="auto-style3">
                <input type="search" class="sub" name="sub6" id="sub6" type="text" value='<?php echo  $sub6; ?>' /></td>
				<td class="auto-style3">
                <input type="search" class="subc" name="sub6c" id="sub6c" type="text" value='<?php echo  $sub6c; ?>'/></td>
				</tr>
<!---7th -------------------------------------------------------------------->
        <tr>
            <td class="auto-style3">
                <input type="search" class="sub" name="sub7" id="sub7" type="text" value='<?php echo  $sub7; ?>' /></td>
                <td class="auto-style3">
             <input type="search" class="subc" name="sub7c" id="sub7c" type="text" value='<?php echo  $sub7c; ?>'/></td>
          </tr>
<!---8th -------------------------------------------------------------------->
		  <tr>
            <td class="auto-style3">
                <input type="search" class="sub"name=" sub8" id="sub8" type="text" value='<?php echo  $sub8; ?>' /></td>
				<td class="auto-style3">
                <input type="search" class="subc" name="sub8c" id="sub8c" type="text" value='<?php echo  $sub8c; ?>'/></td>
				</tr>
		</table>
<!---elective subjects------------------------------>
		<h2>elective Subjects</h2>
		<table  name="regular" id="elective" class="elective" style="color:black; height:150px;width:50%"  >
         <tr><td> Subjects </td> <td> Sub Code </td></tr>
<!---1st -------------------------------------------------------------------->
        <tr>
		<td class="auto-style4" >
                <input type="search" class="sub" name="sub9" id="sub9" type="text" value='<?php echo  $sub9; ?>' /></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub9c" id="sub9c" type="text" value='<?php echo  $sub9c; ?>' /></td>
				</tr>
<!---2nd -------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
               <input type="search" class="sub" name="sub10" id="sub10" type="text" value='<?php echo $sub10;?>' /></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub10c" id="sub10c" type="text" value='<?php echo  $sub10c; ?>' ></td>
        </tr>
<!---3rd -------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
                <input type="search" class="sub" name="sub11" id="sub11" type="text" value='<?php echo  $sub11; ?>'/></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub11c" id="sub11c" type="text" value='<?php echo  $sub11c; ?>' /></td>
        </tr>
<!---4th-------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
                <input type="search" class="sub" name="sub12" id="sub12" type="text"  value='<?php echo  $sub12; ?>'/></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub12c" id="sub12c" type="text" value='<?php echo  $sub12c; ?>'/></td>
        </tr>
<!---5th-------------------------------------------------------------------->
        <tr>
            <td class="auto-style4">
                <input type="search" class="sub" name="sub13" id="sub13" type="text" value='<?php echo  $sub13; ?>'/></td>
            <td class="auto-style3">
                <input type="search" class="subc" name="sub13c" id="sub13c" type="text" value='<?php echo  $sub13c; ?>'/></td>
        </tr>
<!---6th -------------------------------------------------------------------->
        <tr>
            <td class="auto-style3">
                <input type="search" class="sub" name="sub14" id="sub14" type="text" value='<?php echo  $sub14; ?>' /></td>
				<td class="auto-style3">
                <input type="search" class="subc" name="sub14c" id="sub14c" type="text" value='<?php echo  $sub14c; ?>'/></td>
				</tr>
<!---7th -------------------------------------------------------------------->
        <tr>
            <td class="auto-style3">
                <input type="search" class="sub" name="sub15" id="sub15" type="text" value='<?php echo  $sub15; ?>' /></td>
                <td class="auto-style3">
             <input type="search" class="subc" name="sub15c" id="sub15c" type="text" value='<?php echo  $sub15c; ?>'/></td>
          </tr>
<!---8th -------------------------------------------------------------------->
		  <tr>
            <td class="auto-style3">
                <input type="search" class="sub"name=" sub16" id="sub16" type="text" value='<?php echo  $sub16; ?>' /></td>
				<td class="auto-style3">
                <input type="search" class="subc" name="sub16c" id="sub8c" type="text" value='<?php echo  $sub16c; ?>'/></td>
				</tr>
		</table>
<!---elective subjects------------------------------>
<!--<input type="search" type="submit" class="submit" id="submit" value="Update"/>-->
	<button onclick="myFunction()"  value="Update">update</button>

	           <script type="text/javascript">
				 function myFunction(){

		   alert("update");
		   window.location.href = "editsub.php";

				 }
				 </script>
</form>
</body>
</html>
