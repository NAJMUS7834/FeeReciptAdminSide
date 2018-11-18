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
         $array=json_decode($_POST[name23]);

         mysqli_select_db( $conn,"new1");
        $sql="INSERT INTO `studentdb` (`usn`, `sem`, `branch`, `fname`, `sec`, `sid`, `sub1`, `sub1c`, `sub2`, `sub2c`, `sub3`, `sub3c`, `sub4`, `sub4c`, `sub5`, `sub5c`, `sub6`, `sub6c`, `sub7`, `sub7c`, `sub8`, `sub8c`, `sub9`, `sub10`, `sub11`, `sub12`, `sub13`, `sub14`, `sub15`, `sub16`, `sub17`, `sub17c`, `sem1`, `sub18`, `sub18c`, `sem2`, `sub19`, `sub19c`, `sem3`, `sub20`, `sub20c`, `sem4`, `sub21`, `sub21c`, `sem5`, `sub22`, `sub22c`, `sem6`, `sub23`, `sub23c`, `sem7`, `sub24`, `sub24c`, `sem8`, `recived`, `uploaded`)
         VALUES
        ('$_POST[name]','$_POST[name2]','$_POST[name3]','$_POST[name4]',
        '$_POST[name5]','$_POST[name6]','$_POST[name7]','$_POST[name8]',
         '$_POST[name9]','$_POST[name10]','$_POST[name11]','$_POST[name12]',
         '$_POST[name13]','$_POST[name14]','$_POST[name15]','$_POST[name16]',
         '$_POST[name17]','$_POST[name18]','$_POST[name19]','$_POST[name20]',
         '$_POST[name21]','$_POST[name22]','$array[0]','$array[1]','$array[2]',
         '$array[3]','$array[4]','$array[5]','$array[6]','$array[7]','$_POST[name31]',
         '$_POST[name32]','$_POST[name33]','$_POST[name34]','$_POST[name35]',
         '$_POST[name36]','$_POST[name37]','$_POST[name38]','$_POST[name39]',
         '$_POST[name40]','$_POST[name41]','$_POST[name42]','$_POST[name43]',
         '$_POST[name44]','$_POST[name45]','$_POST[name46]','$_POST[name47]',
         '$_POST[name48]','$_POST[name49]','$_POST[name50]','$_POST[name51]',
         '$_POST[name52]','$_POST[name53]','$_POST[name54]','$_POST[name55]'
         ,'$_POST[name56]')";

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
