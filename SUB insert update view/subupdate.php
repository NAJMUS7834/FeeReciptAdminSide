 <?php
$servername = "localhost";
$username = "root";

$password = "";
$dbname = "new1";
$sem = $_POST["sem"];
$branch= $_POST["branch"];
$sub1= $_POST["sub1"];
$sub1c= $_POST["sub1c"];
$sub2= $_POST["sub2"];
$sub2c= $_POST["sub2c"];
$sub3= $_POST["sub3"];
$sub3c= $_POST["sub3c"];
$sub4= $_POST["sub4"];
$sub4c= $_POST["sub4c"];
$sub5= $_POST["sub5"];
$sub5c= $_POST["sub5c"];
$sub6= $_POST["sub6"];
$sub6c= $_POST["sub6c"];
$sub7= $_POST["sub7"];
$sub7c= $_POST["sub7c"];
$sub8= $_POST["sub8"];
$sub8c= $_POST["sub8c"];
$sub9= $_POST["sub9"];
$sub9c= $_POST["sub9c"];
$sub10= $_POST["sub10"];
$sub10c= $_POST["sub10c"];
$sub11= $_POST["sub11"];
$sub11c= $_POST["sub11c"];
$sub12= $_POST["sub12"];
$sub12c= $_POST["sub12c"];
$sub13= $_POST["sub13"];
$sub13c= $_POST["sub13c"];
$sub14= $_POST["sub14"];
$sub14c= $_POST["sub14c"];
$sub15= $_POST["sub15"];
$sub15c= $_POST["sub15c"];
$sub16= $_POST["sub16"];
$sub16c= $_POST["sub16c"];
// Create connection
$conn = mysqli_connect($servername, $username,$password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
header('location:updateOldSub.html');
 mysqli_select_db( $conn,"new1");

//$sql=UPDATE studentdb  SET studentdb.uploaded = '$uploaded' WHERE studentdb.usn =  '$usn ';

$sql= mysqli_query($conn, "UPDATE subdb  SET subdb.sub1 = '$sub1',subdb.sub1c = '$sub1c',subdb.sub2 = '$sub2',subdb.sub2c = '$sub2c',
subdb.sub3 = '$sub3',subdb.sub3c = '$sub3c',subdb.sub4 = '$sub4',subdb.sub4c = '$sub4c',subdb.sub5 = '$sub5',
subdb.sub5c = '$sub5c',subdb.sub6 = '$sub6',subdb.sub6c = '$sub6c',subdb.sub7 = '$sub7',subdb.sub7c = '$sub7c',
subdb.sub8 = '$sub8c',subdb.sub9 = '$sub9',subdb.sub9c = '$sub9c',subdb.sub10 = '$sub10',subdb.sub10c = '$sub10c',
subdb.sub11 = '$sub11',subdb.sub11c = '$sub11c',subdb.sub12 = '$sub12',subdb.sub12c = '$sub12c',
subdb.sub13 = '$sub13',subdb.sub13c = '$sub13c',subdb.sub14 = '$sub14',subdb.sub14c = '$sub14c',subdb.sub15 = '$sub15',
subdb.sub15c = '$sub15c',subdb.sub16 = '$sub16',subdb.sub16c = '$sub16c'
WHERE subdb.sem =  '$sem ' AND subdb.branch =  '$branch ' ") or die("Query fail :" .mysqli_error());

if(!mysqli_query($conn,$sql))

  {

  die('Error:'.mysqli_error($conn));

  }

echo "1 record added";
mysqli_close($conn);?>
