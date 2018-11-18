<?php

$con = mysqli_connect("localhost","root","najmus786");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

mysqli_select_db("new1", $con);

$con = mysqli_connect("localhost","root","najmus786");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

mysqli_select_db("new1", $con);

//$sql="select * from accountdtl";

$result = mysqli_query("select * from subdb where sem='$_POST[sem]' And branch='$_POST[branch]'");

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

}

mysqli_close($con);

 

?>

<html>

<body>

<from >

 

  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">

        <tr>

           

            <td style="font-family:Copperplate Gothic Bold">&nbsp;</td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">Sem:</td>

            <td class="auto-style4">

                <input id="Text1" type="text" value='<?php echo  $sem; ?>'/></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">branch</td>

            <td class="auto-style4">

                <input id="Text2" type="text" value='<?php echo  $branch; ?>'/></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub1:</td>

            <td class="auto-style4">

                <input id="Text3" type="text" value='<?php echo  $sub1; ?>' /></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub1c:</td>

            <td class="auto-style4">

                <input id="Text4" type="text" value='<?php echo  $sub1c; ?>' /></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">sub2:</td>

            <td class="auto-style4">

                <input id="Text5" type="text" value='<?php echo  $sub2; ?>' /></td>

        </tr>

        <tr>

           <td style="color:red;background-color:aqua;" class="auto-style3">sub2c:</td>

            <td class="auto-style4">

                <input id="Text6" type="text" value='<?php echo  $sub2c; ?>' ></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub3:</td>

            <td class="auto-style4">

                <input id="Text7" type="text" value='<?php echo  $sub3; ?>'/></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub3c:</td>

            <td class="auto-style4">

                <input id="Text8" type="text" value='<?php echo  $sub3c; ?>' /></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub4:</td>

            <td class="auto-style4">

                <input id="Text9" type="text"  value='<?php echo  $sub4; ?>'/></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub4c:</td>

            <td class="auto-style4">

                <input id="Text10" type="text" value='<?php echo  $sub4c; ?>'/></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">sub5:</td>

            <td class="auto-style4">

                <input id="Text11" type="text" value='<?php echo  $sub5; ?>'/></td>

        </tr>

        <tr>

             <td style="color:red;background-color:aqua;" class="auto-style3">sub5c:</td>

            <td class="auto-style4">

                <input id="Text12" type="text" value='<?php echo  $sub5c; ?>'/></td>

        </tr>

        <tr>

            <td style="color:red;background-color:aqua;" class="auto-style3">sub6:</td>

            <td>

                <input id="Text13" type="text" value='<?php echo  $sub6; ?>' /></td>

        </tr>

        <tr>

            <td></td>

        </tr>

    </table>

</form>

</body>

</html>