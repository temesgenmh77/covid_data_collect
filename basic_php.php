<?php

include_once("dbconnect.php");

$id = $_POST['id'];
$fname = $_POST['fname'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$college = $_POST['college'];
$dprt = $_POST['dprt'];
$admission = $_POST['admission'];
$graduation = $_POST['graduation'];
$phone1 = $_POST['phone1'];
$phone2 = $_POST['phone2'];
$email = $_POST['email'];
$nation = $_POST['nation'];
$region = $_POST['region'];
$zone = $_POST['zone'];
$woreda = $_POST['woreda'];
$kebele = $_POST['kebele'];
$hno = $_POST['hno'];
$ffname = $_POST['ffname'];
$mfname = $_POST['mfname'];
$efname = $_POST['efname'];
$relation = $_POST['relation'];
$nation1 = $_POST['nation1'];
$region1 = $_POST['region1'];
$zone1 = $_POST['zone1'];
$woreda1 = $_POST['woreda1'];
$kebele1 = $_POST['kebele1'];
$hno1 = $_POST['hno1'];
$ephone1 = $_POST['ephone1'];
$ephone2 = $_POST['ephone2'];


$sql = "insert into tracer_data values('$id','$fname','$gender','".$age."','$college','$dprt','". $admission ."','".$graduation."','$phone1','$phone2','$email','$nation','$region','$zone','$woreda','$kebele','$hno','$ffname','$mfname','$efname','$relation','$nation1','$region1','$zone1','$woreda1','$kebele1','$hno1','$ephone1','$ephone2')";

			if($conn->query($sql)){
                
            echo "<div align='center' style = 'background-color:Gray; margin-top: 200px;'><h1>Thank you very much! <br> Your data were  submitted successfully! </h1>";
                   }
                    else{
            echo "<div align = 'center' style = 'background-color:Gray; margin-top: 200px;'><h1>ERROR! <br>Your data were not submitted! Try again</h1>";
            }
?>