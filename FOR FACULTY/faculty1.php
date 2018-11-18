    <?php
    session_id('mySessionID');
    session_start();?>
    <!doctype html>
      <html>
          <head>
         <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
          <style type="text/css">
    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom checkbox */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color:#D3D3D3;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color:#808080;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

        body{
          margin-left: 2%;
          margin-right: 2%;
          font-weight: bolder;
        }
        table {
        border-collapse: collapse;
       width:100%;

     }

    .one-third{
      width:33.33%;
      float: left;
    }
    .one-half{
      width:40%;
      float: left;
      margin-right: 10%;
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

             .submit
    {
        width:100%;
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

           header{
        background-color:#6991AC;
        width:100%;
        height: 86px;

    }
    #header-inner{
        max-width:1200px;
        margin:0 auto;
    }
    #logo{
        animation: yourAnimation1 2s forwards 0s linear;
        margin:20px;
        float: left;
        width: 200px;
        height: 60px;
        background:url(img/VNH.png) no-repeat center;
    }

    @keyframes yourAnimation1{
        0%{
            transform: translateX(-20%);
            opacity: 0.2;
            }
        50%{
            transform: translateX(-10%);
            opacity: 0.4;
            }
        100%{
            transform: rotate(xx) translateX(0);
            opacity: 1;
            }
    }

    /*---Start Navigation--*/
    nav {
        float: right;
        padding:25px 20px 0 0;
    }

     #menu-icon{
        display:hidden;
        width:40px;
        height:40px;
        background:url(img/nav.png) center;
        }

        a:hover#menu-icon{
            border-radius: 4px 4px 0 0;
        }
    ul{
        list-style-type:none;
        font-weight:bold;
        font-family:Comic Sans MS;
    }
    nav ul li{
        font-family:Comic Sans MS;
        font-size:150%;
        display: inline-block;
        float: left;
        padding: 10px;
        font-weight:bold;
    }
    nav ul li a{
        color:#f5f5f5;
        font-weight:bold;
        text-decoration:none;
    }
    nav ul li a:hover{
        color: #C3D7DF;
    }

    footer.second{

        background-color:#544b59;
        max-height:55px;
        margin: 0;

    }
    footer.second p{

        text-align:center;

    }
    input{width: 100%;}

    /*----------------------MEDIA!!!----------------------------*/

     @media screen and (max-width: 768px){
     #logo{
             margin:15px 0 20px -25px;
             background:url(img/VNH-mobile.png) no-repeat center;
         }
       .one-third{
       width:100%;
       }

         #menu-icon{
             display:inline-block;
         }
         nav ul,nav:active ul{
             display:none;
             z-index:1000;
             position:absolute;
             padding:20px;
             background:#6991AC;
             right: 20px;
             top:60px;
             border:2px solid #fff;
             border-radius: 2px 0 2px 2px;
             width:50%;
              }
         nav:hover ul{
             display:block;
         }
         nav li{
             text-align:center;
             width:100%;
             padding:10px 0 ;
     }
      .one-third{
        100%;
      }
          .one-half{
              width:100%;
          }

     }

          </style>
          </head>
    <body>
    <header>
        <div id="header-inner">
           <a href="FacultyIndex.html" id="logo"></a>
           <nav>
             <a href="#" id="menu-icon"></a>
        <ul>
             <li><a href="FacultyIndex.html">HOME</a></li>
             <li><a href="progress.php" >Progress</a></li>
              <li><a href="update.html" >Update</a></li>
        </ul>
          </nav>
        </div>
    </header>
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
    <?php
    $name = $_SESSION['from'];
    echo "<h2><strong>YOUR ASSIGNED WORK IS FROM:</strong> " . $name. "</h2>";
    $name1 = $_SESSION['from1'];
    $name2 = $_SESSION['from2'];
    $name3 = $_SESSION['from3'];
    $name4 = $_SESSION['from4'];
    $name5 = $_SESSION['from5'];
    ?>
    <form id='formid' action="insert.php" method="post" >

        <div class="one-third">
            <table>
            <tr>
             <td>USN:<td>
          <td>
                 <input name="usn" id="usn" class="usn" type="text" autocomplete="on"/></td>
         </tr>  </table></div>

             <div class="one-third">  <table><tr><td>SEM:</td>
                <td >
                    <input name="sem" id="sem" class="sem" type="text" value='<?php echo  $sem; ?>'/></td>
    </tr>  </table></div>
    <div class="one-third">  <table><tr><td>BRANCH:</td>
                <td>
                <input name="branch" id="branch" class="branch" type="text" value='<?php echo  $branch; ?>'/></td>
     </tr>  </table></div>
     <div class="one-third">  <table><tr><td>FACULTY NAME:</td>
                <td>
            <input name="fname" id="fname" type="text" value='<?php echo  $name1;?>' /></td>
    </tr>  </table></div>
    <div class="one-third">  <table><tr><td>SECTION:</td>
                <td>
            <input name="sec" id="sec" type="text" value='<?php echo  $name2;?>' /></td>
    </tr>  </table></div>
    <div class="one-third">  <table><tr><td>ID:</td>
              <td>
            <input name="sid" id="sid" type="text" value='<?php echo  $name3;?>' /></td>
      </tr>
    </table></div>

    <div class="one-half">
        <h2>Regular Subjects</h2>
            <table>
             <tr><th width="70%"> Subjects </th> <th> Sub Code </th></tr>
    <!--1st -------------------------------------------------------------------->
            <tr>
                <td >
                    <input class="sub" name="sub1" id="sub1" type="text" value='<?php echo  $sub1; ?>' /></td>
                <td>
                    <input class="subc" name="sub1c" id="sub1c" type="text" value='<?php echo  $sub1c; ?>' /></td>
                    </tr>
    <!---2nd -------------------------------------------------------------------->
            <tr>
                <td>
                   <input class="sub" name="sub2" id="sub2" type="text" value='<?php echo $sub2;?>' /></td>
                <td>
                    <input class="subc" name="sub2c" id="sub2c" type="text" value='<?php echo  $sub2c; ?>' ></td>
            </tr>
    <!---3rd -------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub3" id="sub3" type="text" value='<?php echo  $sub3; ?>'/></td>
                <td>
                    <input class="subc" name="sub3c" id="sub3c" type="text" value='<?php echo  $sub3c; ?>' /></td>
            </tr>
    <!---4th-------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub4" id="sub4" type="text"  value='<?php echo  $sub4; ?>'/></td>
                <td>
                    <input class="subc" name="sub4c" id="sub4c" type="text" value='<?php echo  $sub4c; ?>'/></td>
            </tr>
    <!---5th-------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub5" id="sub5" type="text" value='<?php echo  $sub5; ?>'/></td>
                <td>
                    <input class="subc" name="sub5c" id="sub5c" type="text" value='<?php echo  $sub5c; ?>'/></td>
            </tr>
    <!---6th -------------------------------------------------------------------->
            <tr>
                <td>
                    <input class="sub" name="sub6" id="sub6" type="text" value='<?php echo  $sub6; ?>' /></td>
                    <td>
                    <input class="subc" name="sub6c" id="sub6c" type="text" value='<?php echo  $sub6c; ?>'/></td>
                    </tr>
    <!---7th -------------------------------------------------------------------->
            <tr>
                <td >
                    <input class="sub" name="sub7" id="sub7" type="text" value='<?php echo  $sub7; ?>' /></td>
                    <td>
                 <input class="subc" name="sub7c" id="sub7c" type="text" value='<?php echo  $sub7c; ?>'/></td>
              </tr>
    <!---8th -------------------------------------------------------------------->
              <tr>
                <td>
                    <input class="sub"name=" sub8" id="sub8" type="text" value='<?php echo  $sub8; ?>' /></td>
                    <td>
                    <input class="subc" name="sub8c" id="sub8c" type="text" value='<?php echo  $sub8c; ?>'/></td>
                    </tr>
            </table></div>
    <!---elective subjects------------------------------>

    <div class="one-half" id="cb">
    <h2>ELECTIVE/EXTRA SUBJECTS</h2>
    <label class="container">
    <!--1st elective subject--------------------------------------------------->    
    <input type="Checkbox"  class="cb" id="sub9"  value='<?php echo  $sub9; ?> <?php echo  $sub9c; ?>' />  <?php echo  $sub9;  ?>&nbsp;&nbsp;&nbsp;<?php echo     $sub9c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--2nd elective subject--------------------------------------------------->         
    <input type="Checkbox"  class="cb" id="sub10" value='<?php echo  $sub10; ?> <?php echo  $sub10c; ?>'/> <?php echo  $sub10; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub10c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--3rd elective subject--------------------------------------------------->     
    <input type="Checkbox"  id="sub11" class="cb" value='<?php echo  $sub11; ?> <?php echo  $sub11c; ?>'/> <?php echo  $sub11; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub11c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--4th elective subject--------------------------------------------------->     
    <input type="Checkbox"  id="sub12" class="cb" value='<?php echo  $sub12; ?> <?php echo  $sub12c; ?>'/> <?php echo  $sub12; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub12c; ?>
    <span class="checkmark"></span></label><label class="container">
     <!--5th elective subject--------------------------------------------------->    
    <input type="Checkbox" class="cb" id="sub13" value='<?php echo  $sub13; ?> <?php echo  $sub13c; ?>'/> <?php echo  $sub13; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub13c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--6th elective subject--------------------------------------------------->     
    <input type="Checkbox"  class="cb" id="sub14" value='<?php echo  $sub14; ?><?php echo  $sub14c; ?>'/> <?php echo  $sub14; ?>&nbsp;&nbsp;&nbsp;<?php echo   $sub14c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--7th elective subject--------------------------------------------------->     
    <input type="Checkbox" class="cb" id="sub15" value='<?php echo  $sub15; ?><?php echo  $sub15c; ?>'/> <?php echo  $sub15; ?>&nbsp;&nbsp;&nbsp;<?php echo   $sub15c; ?>
    <span class="checkmark"></span></label><label class="container">
    <!--8th elective subject--------------------------------------------------->     
    <input type="Checkbox" id="sub16" class="cb" value='<?php echo  $sub16; ?> <?php echo  $sub16c; ?>'/> <?php echo  $sub16; ?>&nbsp;&nbsp;&nbsp;<?php echo  $sub16c; ?>
    <span class="checkmark"></span></label><br><br><br>

    </div>

    <!---BACK-LOGS--------------------------------------------->
    <div class="one-half">
    <table >
    <h2>BACK-LOGS</h2>
    <tr><th>Subjects</th> <th>Sub Code</th> <th>sem</th></tr>

    <tr><td width="60%"> <input type="text" class="sub" id="sub17" name="sub17" /></td>
    <td width="20%"><input type="text" class="subc" id="sub17c" name="sub17c" /></td>
     <td width="20%"><input type="text" class="subc" id="sem1" name="sem1" /></td></tr>

    <tr><td> <input type="text" class="sub"  id="sub18" name="sub18" /></td>
     <td><input type="text" class="subc" id="sub18c" name="sub18c" /></td>
     <td><input type="text" class="subc" id="sem2" name="sem2" /></td>  </tr>

    <tr><td> <input type="text" class="sub"  id="sub19" name="sub19" /></td>
    <td><input type="text" class="subc" id="sub19c" name="sub19c" /></td>
     <td><input type="text" class="subc" id="sem3" name="sem3" /> </td> </tr>

    <tr><td> <input type="text" class="sub"  id="sub20" name="sub20" /></td>
     <td><input type="text" class="subc" id="sub20c" name="sub20c" /></td>
     <td><input type="text" class="subc" id="sem4" name="sem4" /></td>  </tr>

    <tr><td> <input type="text" class="sub"  id="sub21" name="sub21" /></td>
    <td><input type="text" class="subc" id="sub21c" name="sub21c" /></td>
     <td><input type="text" class="subc" id="sem5" name="sem5" /></td> </tr>

    <tr><td> <input type="text" class="sub" id="sub22" name="sub22" /></td>
    <td><input type="text" class="subc" id="sub22c" name="sub22c" /></td>
     <td><input type="text" class="subc" id="sem6" name="sem6" /></td>  </tr>

    <tr><td> <input type="text" class="sub"  id="sub23" name="sub23" /></td>
     <td><input type="text" class="subc" id="sub23c" name="sub23c" /></td>
     <td><input type="text" class="subc" id="sem7" name="sem7" /></td> </tr>

    <tr><td> <input type="text" class="sub"  id="sub24" name="sub24" /></td>
     <td><input type="text" class="subc" id="sub24c" name="sub24c" /></td>
     <td><input type="text" class="subc" id="sem8" name="sem8" /></td>  </tr>
    </table>
    </div>
    <!--status-->
    <div class="one-half">
    <h2>RECIVED AND UPLOAD STATUS</h2>
      <br>

    Form Recived:<select name="branch" id="recived" >
        <option value="Yes">Yes</option>
        <option value="No">No</option>

      </select><br></br>
    Uploaded to VTU Portal:<select name="branch" id="uploaded" >
        <option value="Yes">Yes</option>
        <option value="No">No</option>
     <br><br><br></select>
    </div>

    <input type="submit"  class="submit"  value="Submit"/>

    <script type='text/javascript'>
        /* attach a submit handler to the form */
        $("#formid").submit(function(event) {

          /* stop form from submitting normally */
          event.preventDefault();

          /* get the action attribute from the <form action=""> element */
          var $form = $( this ),
              url = $form.attr( 'action' );


          var op = document.querySelectorAll('.cb')
          var myArray = [];
          for(var i=0;i<op.length;i++)
            {
                if(op[i].checked==true)
                    {
                        myArray.push(op[i].value) //selected output store in my array
                    }
            }

            data=JSON.stringify(myArray); //array encode
            console.log(data);

          /* Send the data using post with element id name and name2*/


          var posting = $.post( url, { name: $('#usn').val(),
                                        name2: $('#sem').val(), 
                                        name3: $('#branch').val(),
                                       name4: $('#fname').val(),
                                      name5: $('#sec').val(),
                                      name6: $('#sid').val(), 
                                      name7: $('#sub1').val(), 
                                      name8: $('#sub1c').val(),
                                       name9: $('#sub2').val(), 
                                      name10: $('#sub2c').val(), 
                                      name11: $('#sub3').val(), 
                                      name12: $('#sub3c').val(), 
                                      name13: $('#sub4').val(),	 
                                      name14: $('#sub4c').val(), 
                                      name15: $('#sub5').val(), 
                                      name16: $('#sub5c').val(), 
                                      name17: $('#sub6').val(), 
                                      name18: $('#sub6c').val(),
                                      name19: $('#sub7').val(), 
                                      name20: $('#sub7c').val(), 
                                      name21: $('#sub8').val(),
                                      name22: $('#sub8c').val(),
                                      name23 : data,
                                      name31: $('#sub17').val(),
                                      name32: $('#sub17c').val(),
                                      name33: $('#sem1').val(), 
                                      name34: $('#sub18').val(),
                                      name35: $('#sub18c').val(),
                                      name36: $('#sem2').val(),
                                      name37: $('#sub19').val(),
                                      name38: $('#sub19c').val(),
                                      name39: $('#sem3').val(),
                                      name40: $('#sub20').val(),
                                      name41: $('#sub20c').val(),
                                      name42: $('#sem4').val(),
                                      name43: $('#sub21').val(),
                                      name44: $('#sub21c').val(),
                                      name45: $('#sem5').val(), 
                                      name46: $('#sub22').val(),
                                      name47: $('#sub22c').val(),
                                      name48: $('#sem6').val(),
                                      name49: $('#sub23').val(),
                                      name50: $('#sub23c').val(),
                                      name51: $('#sem7').val(),
                                      name52: $('#sub24').val(),
                                      name53: $('#sub24c').val(),
                                      name54: $('#sem8').val(),
                                      name55: $('#recived').val(),
                                      name56: $('#uploaded').val()} );



          /* Alerts the results */
          posting.done(function(data){
            alert("Successfull");
          });
        });
    </script>


    </form>
    <footer class="second">
        <p>&copyVVCE:devloped by Najmus Seemab</p>
    </footer>
    </body>
    </html>
