<!DOCTYPE html>
<html>
<body>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new1";


session_id('mySessionID');
session_start();
$usn =$_SESSION["usn"];
// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
header('location:update.html');
mysqli_select_db( $conn,"new1");
 $sql= mysqli_query($conn, "UPDATE studentdb  SET recived = 'Yes' , uploaded = 'Yes' WHERE
 studentdb.usn =  '$usn '") or die("Query fail :" .mysqli_error());
if(!mysqli_query($conn,$sql))
 {
  die('Error:'.mysqli_error($conn));
 }
echo "1 record added";
mysqli_close($conn)
?>
</body>
</html>
