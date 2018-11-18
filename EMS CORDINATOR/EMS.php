 <?php
$servername = "localhost";
$username = "root";

$password = "";

// Create connection
$conn = mysqli_connect($servername, $username,$password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


 mysqli_select_db( $conn,"new1");
$sql= "INSERT INTO `emsdb` (`sid`, `name`, `branch`, `sem`, `sec`, `fusn`)
 VALUES
 ('$_POST[name1]', '$_POST[name2]', '$_POST[name3]', '$_POST[name4]', '$_POST[name5]', '$_POST[name6]')";



if ($sql) {
   echo "success"; //anything on success

} else {
   die(header("HTTP/1.0 404 Not Found")); //Throw an error on failure
}

if(!mysqli_query($conn,$sql))

  {

  die('Error:'.mysqli_error($conn));

  }

echo "1 record added";



mysqli_close($conn)

?>
