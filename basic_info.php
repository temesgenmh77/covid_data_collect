<?php
include_once("config.php");
include_once("dbconnect.php");
?>


<!docype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css">
  <style type="text/css">
    @viewport{
      zoom: 1.0;
      width: extend-to-zoom;
    }
    @-ms-viewport{
      width: extend-to-zoom;
      zoom: 1.0;
    }

    #header{
      min-height: 100px;
      background-color: #585555;

    }
    #menu{
      min-height: 40px;
      background-color: #A4A4A4;

    }
    #body{
      min-height: 400px;
      margin-top: 3px;
      background-color: #efefef;
    }


    #header, #menu, #body{
      margin-left: 10%;
      margin-right: 10%;

      box-shadow: 3px 5px 7px #666666;
      border: 1px solid black;

    }
    .footer {
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
            font-size: 20px;
        }
  td{
    padding: 8px;
}
  </style>
  
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> -->
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title><?php echo $lang['title'] ?></title>
   
  
</head>
<body>
  
        <div id="menu" align="center" >
          <h2 style="color: #ffffff;"><a href="basic_info.php"><?php echo $lang['tracer'] ?></a>  <a  href="index.php"><?php echo $lang['covid'] ?></a></h2>
        </div> 

     <div id="body">
    
       
           
    <div><h1 align="center">Tracer study data collection</h1></div>
<div class="row justify-content-center" style="margin-left:50px;margin-right: 50px;margin-top: 20px;font-size: 18px" > The purpose of this data collection FORM is to closely monitor the employablility rate, employment type and other information related with the career opportunity of Wolaita Sodo University students after their graduation. Participation is compulsory for all students and please fill all questions in 3 sections by reading the instructions until the SUBMIT button. The questionnaire will take 3-6 minutes. All your personal records will be kept confidentially and will not appear in any report from this assessment.<br><br></div>

<form method="POST" action="basic_php.php">
<table width="50%"align="center">

<tr><td colspan="2" align="center"><h4 style="background-color:LightGray">Basic information</h4></td></tr>  
<tr><td>ID: </td><td><input type="text" id="id" name="id" placeholder="e.g.: SOI/R/0000/00"></td></tr>
<tr><td class="decorates">Full Name:</td><td><input type="text" id="fname" name="fname" placeholder="Write your full name"></td></tr>
<tr><td>Sex:</td><td><input type="radio" id="gender" name="gender">Male<br><input type="radio" id="gender" name="gender">Female</td></tr>
<tr><td>Age:</td><td><input type="number" id="age" name="age"></td></tr>
<tr>
<td>College/School:</td><td>
  <select id="college" name="college"  onchange="myFunction()">
    <option value="NO">Select your college or school</option>
<option value="CHSM">College of Health Science and Medicine</option>
<option value="SEBS">School of Education and Behavioral Sciences</option>
<option value="CBE">College of Business and Economics</option>
<option value="COE">College of Engineering</option>
<option value="COA">College of Agriculture</option>
<option value="CNCS">College of Natural and Computational Science</option>
<option value="CSSH">College of Social Science and Humanities</option>
<option value="SOVM">School of Veterinary Medicine</option>
<option value="SOL">School of Law</option>
<option value="SOI">School of Informatics</option>
  </select>
  </td></tr>
  <tr><td>Department</td><td><p id="demo"></p></td></tr>

<script type="text/javascript">
  
var SEBS1 = new Array("Psychology","Educational Planning and Management","PGDT");

var CHSM1 = new Array("Public health Officer","Nursing","Anesthesia","Medicine","Midwifery","Human Nutrition","Public health officer_tercha",
"Plant Science_tercha","Pharmacy","Medical Laboratory","Reproductive Health","Reproductive Health and Nutrition","Epidemology","Operation Theatre and Surgical","Emergency & Critical Care Nursing","Neonatal Nursing");

var CBE1 = new Array("Management","Economics","Public Administration and Development Management","Accounting and Finance","Cooperative Accounting and Auditing","Cooperative Business Management","Marketing","Tourism and Hospitality Management");

var COE1= new Array("Architecture","Civil Engineering","Construction Technology Manageent(CoTM)","Mechanical Engineering","Electrical and Computer Engineering","Hydraulic and Water Resource");

var COA1= new Array("Agribusiness and Value Chain Management","Animal and Range Science","Horticulture","Natural Resource Management","Plant Science","Rural Development and Agricultural Extension","Agricultural Economics","Animal Nutrition");

var CNCS1= new Array("Mathematics","Biology","Chemistry","Environmental Science","Physics","Sport Science","Statistics","Applied","Geology",    "Bio-Technology","Zoology");

var CSSH1 = new Array("Civics & Ethical Studies","English Language & Litraturre","History & Heritage Management","Sociology","Geography and Environmental Studies","Wolaita Language and Litrature","Public Relations & Communication Studies","Archeology & Heritage Management","Dawuro Language","Social Anthropology");

var SOVN1= new Array("Veterinary Medicine","Animal Health","MVSc in Veterinary Clinical Medicine");

var SOL1 = new Array("Law");

var SOI1 = new Array("Computer Science","Information Systems","nformation Technology");

</script>

<script>
function myFunction() {
  var x = document.getElementById("college").value;
var tes = "<select name='dprt' id='dprt'>";
  switch(x){
    case "CHSM":
        for (var i=0 ; i < CHSM1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ CHSM1[i]+"</option>";
        }
       break; 
       case "SEBS":
        for (var i=0 ; i < SEBS1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ SEBS1[i]+"</option>";
        }
       break; 

       case "CBE":
        for (var i=0 ; i < CBE1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ CBE1[i]+"</option>";
        }
       break; 

       case "COE":
        for (var i=0 ; i < COE1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ COE1[i]+"</option>";
        }
       break; 

       case "COA":
        for (var i=0 ; i < COA1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ COA1[i]+"</option>";
        }
       break; 

       case "CNCS":
        for (var i=0 ; i < CNCS1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ CNCS1[i]+"</option>";
        }
       break; 

       case "CSSH":
        for (var i=0 ; i < CSSH1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ CSSH1[i]+"</option>";
        }
       break; 

       case "SOVN":
        for (var i=0 ; i < SOVN1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ SOVN1[i]+"</option>";
        }
       break; 

       case "SOL":
        for (var i=0 ; i < SOL1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ SOL1[i]+"</option>";
        }
       break; 

       case "SOI":
        for (var i=0 ; i < SOI1.length ; i++){
          tes +=  "<option value='" + i + "'>"+ SOI1[i]+"</option>";
        }
       break; 
  }
    
  tes += "</select>" 
  document.getElementById("demo").innerHTML = " " + tes;
}
</script>
</td></tr>

       
  


<tr><td>Year of Admission:  </td><td><input type="text" id="admission" name="admission" ></td></tr>
<tr><td>Year of Graduation: </td><td><input type="text" id="graduation" name="graduation"></td></tr>

<tr><td>Phone Number 1: </td><td><input type="phone" id="phone1" name="phone1"></td></tr>
<tr><td>Phone Number 2 [optional]: </td><td><input type="phone" id="phone2" name="phone2"></td></tr>

<tr><td>Email [optional]</td><td><input type="text" id="email" name="email"></td></tr>

<tr><td colspan="2" align="center"><h4 style="background-color:LightGray">Permanent / Home Address detail</h4></td></tr>

<tr><td>Nationality: </td><td> <select id="nation" name="nation">
    <option value="No">Select your nationlity</option>
    <option value="Ethio">Ethiopian</option>
    <option value="F">Other</option>
  </select>
 </td></tr>

<tr><td>Region: </td><td> <input type="text" id="region" name="region"></td></tr>
<tr><td>Zone: </td><td><input type="text" id="zone" name="zone"></td></tr>
<tr><td>Woreda: </td><td><input type="text" id="woreda" name="woreda"></td></tr>
<tr><td>Kebele: </td><td><input type="text" id="kebele" name="kebele"></td></tr>
<tr><td>House number [optional]:  </td><td><input type="text" id="hno" name="hno"></td></tr>
<tr><td class="decorates">Father Full Name:</td><td><input type="text" id="ffname" name="ffname"></td></tr>
<tr><td class="decorates">Mother Full Name:</td><td><input type="text" id="mfname" name="mfname"></td></tr>

<tr><td colspan="2" align="center"><h4 style="background-color: LightGray">Family/Emergency contact person address detail</h4></td></tr>
<tr><td class="decorates">Full Name:</td><td><input type="text" id="efname" name="efname"></td></tr>
<tr><td class="decorates">Relation:</td><td><input type="text" id="relation" name="relation"></td></tr>
<tr><td>Nationality: </td><td> <select id="nation1" name="nation1">
    <option value="No">Select your nationlity</option>
    <option value="Ethio">Ethiopian</option>
    <option value="F">Other</option>
  </select>
 </td></tr>
<tr><td>Region: </td><td> <input type="text" id="region1" name="region1">
</td></tr>
<tr><td>Zone: </td><td><input type="text" id="zone1" name="zone1"></td></tr>
<tr><td>Woreda: </td><td><input type="text" id="woreda1" name="woreda1"></td></tr>
<tr><td>Kebele: </td><td><input type="text" id="kebele1" name="kebele1"></td></tr>
<tr><td>House number [optional]:  </td><td><input type="text" id="hno1" name="hno1"></td></tr>
<tr><td>Mobile Number : </td><td><input type="phone" id="ephone1" name="ephone1"></td></tr>
<tr><td>homeTelephone [optional]: </td><td><input type="phone" id="ephone2" name="ephone2"></td></tr>
                                    </div>
 

<tr><td></td> <td><input class = "btn-primary" type="submit" name="submit" value="Submit" style="width: 120px; height: 40px; border-radius: 10px;"><input type="reset" name="reset" value="reset" style="width: 120px; height: 40px; border-radius: 10px;"></td></tr>
</form>
</table>

</body>
</html>
