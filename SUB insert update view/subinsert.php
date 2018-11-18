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

 $sql="INSERT INTO `subdb` (`sem`, `branch`, `sub1`, `sub1c`, `sub2`, `sub2c`, `sub3`, `sub3c`, `sub4`, `sub4c`, `sub5`, `sub5c`, `sub6`, `sub6c`, `sub7`, `sub7c`, `sub8`, `sub8c`, `sub9`, `sub9c`, `sub10`, `sub10c`, `sub11`, `sub11c`, `sub12`, `sub12c`, `sub13`, `sub13c`, `sub14`, `sub14c`, `sub15`, `sub15c`, `sub16`, `sub16c`)

VALUES
('$_POST[name]','$_POST[name2]','$_POST[name3]','$_POST[name4]','$_POST[name5]','$_POST[name6]','$_POST[name7]','$_POST[name8]','$_POST[name9]','$_POST[name10]',
'$_POST[name11]','$_POST[name12]','$_POST[name13]','$_POST[name14]','$_POST[name15]','$_POST[name16]','$_POST[name17]','$_POST[name18]',
'$_POST[name19]','$_POST[name20]','$_POST[name21]','$_POST[name22]','$_POST[name23]','$_POST[name24]','$_POST[name25]','$_POST[name26]',
'$_POST[name27]','$_POST[name28]','$_POST[name29]','$_POST[name30]','$_POST[name31]','$_POST[name32]','$_POST[name33]','$_POST[name34]')";

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
