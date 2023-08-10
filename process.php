<?php include("dbconnect.php");?>
    <?php
    $q11 = $_POST['q11'];
    $q12 = $_POST['q12'];
    $q13 = $_POST['q13']."";
    $q14 = $_POST['q14'];
    $q15 = $_POST['q15'];

////////////////////////////////////////////

    $q21 = $_POST['q21']."";
    $q22 = $_POST['A22'];

    $chk="";  
    foreach($q22 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }  
       $q22 = $chk;

    $q23 = $_POST['a23'];

    $chk="";  
    foreach($q23 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
       $q23 = $chk;
    $q24 = $_POST['q24'];
    $q25 = $_POST['q251'];

    $chk="";  
    foreach($q25 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
       $q25 = $chk;

    $q26 = $_POST['q26']."";
    $q27 = $_POST['q27']."";
    $q28 = $_POST['q28']."";
    $q29 = $_POST['q29']."";


    $q210 = $_POST['q210']."";
    $q211 = $_POST['q211']."";
    $q212 = $_POST['q212']."";
    $q213 = $_POST['q213']."";
    $q214 = $_POST['q214']."";
    $q215 = $_POST['q215']."";
    $q216 = $_POST['a216'];

    $chk="";  
    foreach($q216 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
       $q216 = $chk;
    $q217 = $_POST['a217'];

    $chk="";  
    foreach($q217 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
       $q217 = $chk;
    $q218 = $_POST['a218'];

    $chk="";  
    foreach($q218 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
       $q218 = $chk;

    $q219 = $_POST['a219'];
        $chk="";  
    foreach($q219 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
       $q219 = $chk;

    $q31 = $_POST['q31']."";
    $q32 = $_POST['howlong']."";
    $q33 = $_POST['days']."";
    $q34 = $_POST['q34']."";
    $q35 = $_POST['q35']."";
    $q36 = $_POST['q36']."";
    $q37 = $_POST['q37']."";
    $q38 = $_POST['q38']."";
    $q39 = $_POST['q39']."";
    $q310 = $_POST['q310']."";


    $q41 = $_POST['q31']."";
    $q42 = $_POST['when']."";
    $q43 = $_POST['q43']."";
    $q44 = $_POST['q44']."";

    $q51 = $_POST['q51']."";
    $q52 = $_POST['q52']."";
    $q53 = $_POST['q53']."";
    $q54 = $_POST['q54']."";
    $q55 = $_POST['q55']."";
    
    $q56 = $_POST['a56'];
        $chk="";  
    foreach($q56 as $chk1)  
       {  
          $chk.= $chk1.":";  
       }
    $q56 = $chk;  

    $q57 = $_POST['a57'];
      $chk="";  
    foreach($q57 as $chk1)  
       {
          $chk.= $chk1.":";  
       }
    $q57 = $chk;

    $q51 = $_POST['q51']."";
    $q52 = $_POST['q52']."";
    $q53 = $_POST['q53']."";
    $q54 = $_POST['q54']."";
    $q55 = $_POST['q55']."";
    

  $SQL = "insert into covid_wsu_student values(
          '$q11','$q12','$q13','$q14','$q15','$q21','$q22','$q23','$q24','$q25','$q26','$q27',
          '$q28','$q29','$q210','$q211','$q212','$q213','$q214','$q215','$q216','$q217','$q218','$q219',

          '$q31','$q32','$q33','$q34','$q35','$q36','$q37','$q38','$q39','$q310',
          '$q41','$q42','$q43','$q44', '$q51','$q52','$q53','$q54','$q55','$q56','$q57')";

          if($conn->query($SQL)){
                
            echo "<div align='center' style = 'background-color:Gray; margin-top: 200px;'><h1>Thank you very much! <br> Your questionarie were  submitted successfully! </h1>";
                   }
                    else{
            echo "<div align = 'center' style = 'background-color:Gray; margin-top: 200px;'><h1>ERROR! <br>Your questionarie were not submitted! Try again</h1>";
            }
        
 // echo $SQL;
  //echo "$q21,$q22,$q23,$q24,$q25,$q26,$q27,$q28,$q29,$q210,$q211,$q212,$q213,$q214,$q215,$q216,$q217,$q218,$q219 <br>";
  
//  echo "$q31,$q32,$q33,$q34,$q35,$q36,$q37,$q38,$q39,$q310 <br>";
 // echo "$q41,$q42,$q43,$q44<br>";

  //echo "$q51,$q52,$q53,$q54,$q55,$q56,$q57<br>";

    ?>
