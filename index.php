<?php
    include "config.php";
    include('dbconnect.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <style type="text/css">

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
  
  td{
    padding: 8px;
}
        .footer {
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
        }
    </style>
</head>

    
    
    <div style="margin-left: 50px;">
            <body>
    <div id="menu" align="center" >
          <h2 style="color: #ffffff;"><a href="basic_info.php"><?php echo $lang['tracer'] ?></a>  
                                      <a href="index.php"><?php echo $lang['covid'] ?></a></h2>
        </div> 

     <div id="body">    
  <div class="bg-green">
        <h1 align = "center"><?php echo $lang['title'] ?></h1>
    </div>

            <div style="margin-right: 150px;"><?php echo $lang['orientation']?></div>
                    


                    <form method="POST" action="process.php">


                
                <h4 style="background-color: SlateBlue; color: White"><b><?php echo $lang['description1']?> <br></b></h4>

                <b><?php echo $lang['q11']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="text" name="q11" id="q11" placeholder="Your full name here">
                          </div>


                          <b><?php echo $lang['q12']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="text" name="q12" id="q12" placeholder="Your ID No. here"></div>

                          <b><?php echo $lang['q13']?> <br></b>
                          <div style="margin-left: 30px">
                             <input type="radio" name="q13" value="1"> <?php echo  $lang['A131']?> <br>
                             <input type="radio" name="q13" value="2"> <?php echo  $lang['A132']?> <br><br></div>

                          <b><?php echo $lang['q14']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="number" name="q14" id="q14" placeholder="Your age here"><br><br>
                          </div>

                          <b><?php echo $lang['q15']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="text" name="q15" id="q15" placeholder="Your department here"><br><br>
                          </div>


///////////////////////////////////////////////////////////////////////////// <br>

                <h4 style="background-color: SlateBlue; color: White"><b><?php echo $lang['description2']?> <br></b></h4>
                          <b><?php echo $lang['q21']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q21" value="1"> <?php echo  $lang['A211']?> <br>
                              <input type="radio" name="q21" value="2"> <?php echo  $lang['A212']?> <br>
                              <input type="radio" name="q21" value="3"> <?php echo  $lang['A213']?>  <br><br>
                          </div>
                          
                          <b><?php echo $lang['q22']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="checkbox" name="A22[]" value="1"> <?php echo $lang['A221']?> <br>
                              <input type="checkbox" name="A22[]" value="2"> <?php echo $lang['A222']?> <br>
                              <input type="checkbox" name="A22[]" value="3"> <?php echo $lang['A223']?>  <br>
                              <input type="checkbox" name="A22[]" value="4"> <?php echo $lang['A224']?>  <br><br>
                        </div
                    
                          <b><?php echo $lang['q23']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a23[]" value="1"> <?php echo $lang['A231']?> <br>
                              <input type="checkbox" name="a23[]" value="2"> <?php echo $lang['A232']?> <br>
                              <input type="checkbox" name="a23[]" value="3"> <?php echo $lang['A233']?> <br>
                              <input type="checkbox" name="a23[]" value="4"> <?php echo $lang['A234']?> <br>
                              <input type="checkbox" name="a23[]" value="5"> <?php echo $lang['A235']?> <br>
                              <input type="checkbox" name="a23[]" value="6"> <?php echo $lang['A236']?> <br><br>
                            </div>
                       
                          <b><?php echo $lang['q24']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q24" value="1"> <?php echo $lang['A241']?> <br>
                              <input type="radio" name="q24" value="2"> <?php echo $lang['A242']?> <br>
                              <input type="radio" name="q24" value="3"> <?php echo $lang['A243']?>  <br>
                              <input type="radio" name="q24" value="4"> <?php echo $lang['A244']?> <br>
                              <input type="radio" name="q24" value="5"> <?php echo $lang['A245']?>  <br><br>
                           </div>

                          <b><?php echo $lang['q25']?></b><br>
                          
                          <div style="margin-left: 30px">
                              <input type="checkbox" name="q251[]" value="1"> <?php echo $lang['A251']?> <br>
                              <input type="checkbox" name="q251[]" value="2"> <?php echo $lang['A252']?> <br>
                              <input type="checkbox" name="q251[]" value="3"> <?php echo $lang['A253']?>  <br>
                              <input type="checkbox" name="q251[]" value="4"> <?php echo $lang['A254']?> <br>
                              <input type="checkbox" name="q251[]" value="5"> <?php echo $lang['A255']?> <br>
                              <input type="checkbox" name="q251[]" value="6"> <?php echo $lang['A256']?> <br>
                              <input type="checkbox" name="q251[]" value="7"> <?php echo $lang['A257']?>  <br>
                              <input type="checkbox" name="q251[]" value="8"> <?php echo $lang['A258']?> <br>
                              <input type="checkbox" name="q251[]" value="9"> <?php echo $lang['A259']?> <br>
                              <input type="checkbox" name="q251[]" value="10"> <?php echo $lang['A2510']?> <br>
                              <input type="checkbox" name="q251[]" value="11"> <?php echo $lang['A2511']?>  <br><br>
                           </div>

                            <b><?php echo $lang['q26']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q26" value="1"> <?php echo $lang['A261']?> <br>
                              <input type="radio" name="q26" value="2"> <?php echo $lang['A262']?> <br>
                              <input type="radio" name="q26" value="3"> <?php echo $lang['A263']?>  <br>
                              <input type="radio" name="q26" value="4"> <?php echo $lang['A264']?> <br><br>
                           </div>

                           <b><?php echo $lang['q27']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q27" value="1"> <?php echo $lang['A271']?> <br>
                              <input type="radio" name="q27" value="2"> <?php echo $lang['A272']?> <br>
                              <input type="radio" name="q27" value="3"> <?php echo $lang['A273']?>  <br>
                              <input type="radio" name="q27" value="4"> <?php echo $lang['A274']?> <br><br>
                           </div>

                           <b><?php echo $lang['q28']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q28" value="1"> <?php echo $lang['A281']?> <br>
                              <input type="radio" name="q28" value="2"> <?php echo $lang['A282']?> <br>
                              <input type="radio" name="q28" value="3"> <?php echo $lang['A283']?>  <br>
                              <input type="radio" name="q28" value="4"> <?php echo $lang['A284']?> <br><br>
                           </div>
                           <b><?php echo $lang['q29']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q29" value="1"> <?php echo $lang['A291']?> <br>
                              <input type="radio" name="q29" value="2"> <?php echo $lang['A292']?> <br>
                              <input type="radio" name="q29" value="3"> <?php echo $lang['A293']?>  <br>
                              <input type="radio" name="q29" value="4"> <?php echo $lang['A294']?> <br><br>
                           </div>

                           <b><?php echo $lang['q210']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q210" value="1"> <?php echo $lang['A2101']?> <br>
                              <input type="radio" name="q210" value="2"> <?php echo $lang['A2102']?> <br>
                              <input type="radio" name="q210" value="3"> <?php echo $lang['A2103']?>  <br>
                              <input type="radio" name="q210" value="4"> <?php echo $lang['A2104']?> <br><br>
                           </div>

                           <b><?php echo $lang['q211']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q211" value="1"> <?php echo $lang['A2111']?> <br>
                              <input type="radio" name="q211" value="2"> <?php echo $lang['A2112']?> <br>
                              <input type="radio" name="q211" value="3"> <?php echo $lang['A2113']?>  <br>
                              <input type="radio" name="q211" value="4"> <?php echo $lang['A2114']?> <br><br>
                           </div>

                           <b><?php echo $lang['q212']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q212" value="1"> <?php echo $lang['A2121']?> <br>
                              <input type="radio" name="q212" value="2"> <?php echo $lang['A2122']?> <br>
                              <input type="radio" name="q212" value="3"> <?php echo $lang['A2123']?>  <br>
                              <input type="radio" name="q212" value="4"> <?php echo $lang['A2124']?> <br><br>
                           </div>

                            <b><?php echo $lang['q213']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q213" value="1"> <?php echo $lang['A2131']?> <br>
                              <input type="radio" name="q213" value="2"> <?php echo $lang['A2132']?> <br>
                              <input type="radio" name="q213" value="3"> <?php echo $lang['A2133']?>  <br>
                              <input type="radio" name="q213" value="4"> <?php echo $lang['A2134']?> <br><br>
                           </div>

                            <b><?php echo $lang['q214']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q214" value="1"> <?php echo $lang['A2141']?> <br>
                              <input type="radio" name="q214" value="2"> <?php echo $lang['A2142']?> <br>
                              <input type="radio" name="q214" value="3"> <?php echo $lang['A2143']?>  <br>
                              <input type="radio" name="q214" value="4"> <?php echo $lang['A2144']?> <br><br>
                           </div>

                                                       <b><?php echo $lang['q215']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q215" value="1"> <?php echo $lang['A2151']?> <br>
                              <input type="radio" name="q215" value="2"> <?php echo $lang['A2152']?> <br>
                              <input type="radio" name="q215" value="3"> <?php echo $lang['A2153']?>  <br>
                              <input type="radio" name="q215" value="4"> <?php echo $lang['A2154']?> <br><br>
                           </div>

                           <b><?php echo $lang['q216']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a216[]" value="1"> <?php echo $lang['A2161']?> <br>
                              <input type="checkbox" name="a216[]" value="2"> <?php echo $lang['A2162']?> <br>
                              <input type="checkbox" name="a216[]" value="3"> <?php echo $lang['A2163']?> <br>
                              <input type="checkbox" name="a216[]" value="4"> <?php echo $lang['A2164']?> <br>
                              <input type="checkbox" name="a216[]" value="5"> <?php echo $lang['A2165']?> <br><br>
                              
                            </div>

                             <b><?php echo $lang['q217']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a217[]" value="1"> <?php echo $lang['A2171']?> <br>
                              <input type="checkbox" name="a217[]" value="2"> <?php echo $lang['A2172']?> <br>
                              <input type="checkbox" name="a217[]" value="3"> <?php echo $lang['A2173']?> <br>
                              <input type="checkbox" name="a217[]" value="4"> <?php echo $lang['A2174']?> <br><br>
                            </div>

                             <b><?php echo $lang['q218']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a218[]" value="1"> <?php echo $lang['A2181']?> <br>
                              <input type="checkbox" name="a218[]" value="2"> <?php echo $lang['A2182']?> <br>
                              <input type="checkbox" name="a218[]" value="3"> <?php echo $lang['A2183']?> <br>
                              <input type="checkbox" name="a218[]" value="4"> <?php echo $lang['A2184']?> <br>
                              <input type="checkbox" name="a218[]" value="5"> <?php echo $lang['A2185']?> <br><br>
                            </div>

                             <b><?php echo $lang['q219']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a219[]" value="1"> <?php echo $lang['A2191']?> <br>
                              <input type="checkbox" name="a219[]" value="2"> <?php echo $lang['A2192']?> <br>
                              <input type="checkbox" name="a219[]" value="3"> <?php echo $lang['A2193']?> <br>
                              <input type="checkbox" name="a219[]" value="4"> <?php echo $lang['A2194']?> <br>
                              <input type="checkbox" name="a219[]" value="5"> <?php echo $lang['A2195']?> <br><br>
                            </div>



///////////////////////////////////////////////////////////////////////////////////////////////<br>

                <h4 style="background-color: SlateBlue; color: White"><b><?php echo $lang['description3']?> <br></b></h4>

                         <b><?php echo $lang['q31']?></b><br>
                          <div style="margin-left: 30px">
                              <input type="radio" name="q31" value="1"> <?php echo $lang['A311']?> <br>
                              <input type="radio" name="q31" value="2"> <?php echo $lang['A312']?> <br>
                           </div>


                          <b><?php echo $lang['q32']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="number" name="howlong" id="howlong" placeholder="number of days">days</div>

                          <b><?php echo $lang['q33']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="number" name="days" id="days" placeholder="Number of days">days</div>


                            <b><?php echo $lang['q34']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q34" value="1"> <?php echo $lang['A341']?> <br>
                              <input type="radio" name="q34" value="2"> <?php echo $lang['A342']?> <br>
                              <input type="radio" name="q34" value="3"> <?php echo $lang['A343']?>  <br><br>
                           </div>

                            <b><?php echo $lang['q35']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q35" value="1"> <?php echo $lang['A351']?> <br>
                              <input type="radio" name="q35" value="2"> <?php echo $lang['A352']?> <br>
                              <br>
                           </div>

                           <b><?php echo $lang['q36']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q36" value="1"> <?php echo $lang['A361']?> <br>
                              <input type="radio" name="q36" value="2"> <?php echo $lang['A362']?> <br><br>
                           </div>
                           <b><?php echo $lang['q37']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q37" value="1"> <?php echo $lang['A371']?> <br>
                              <input type="radio" name="q37" value="2"> <?php echo $lang['A372']?> <br>
                              <input type="radio" name="q37" value="3"> <?php echo $lang['A373']?>  <br><br>
                           </div>
                           <b><?php echo $lang['q38']?></b><br>
                            <div style="margin-lefteft: 30px">
                              <input type="radio" name="q38" value="1"> <?php echo $lang['A381']?> <br>
                              <input type="radio" name="q38" value="2"> <?php echo $lang['A382']?> <br>
                              <input type="radio" name="q38" value="3"> <?php echo $lang['A383']?>  <br><br>
                           </div>
                           <b><?php echo $lang['q39']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q39" value="1"> <?php echo $lang['A391']?> <br>
                              <input type="radio" name="q39" value="2"> <?php echo $lang['A392']?> <br>
                              <input type="radio" name="q39" value="3"> <?php echo $lang['A393']?>  <br><br>
                           </div>

                           <b><?php echo $lang['q310']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q310" value="1"> <?php echo $lang['A3101']?> <br>
                              <input type="radio" name="q310" value="2"> <?php echo $lang['A3102']?> <br>
                              <input type="radio" name="q310" value="3"> <?php echo $lang['A3103']?>  <br>
                              <input type="radio" name="q310" value="4"> <?php echo $lang['A3104']?>  <br><br>
                           </div>


///////////////////////////////////////////////////////////////////////////// <br>

                <h4 style="background-color: SlateBlue; color: White"><b><?php echo $lang['description4']?> <br></b></h4>

                            <b><?php echo $lang['q41']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q41" value="1"> <?php echo $lang['A411']?> <br>
                              <input type="radio" name="q41" value="2"> <?php echo $lang['A412']?> <br>
                              <input type="radio" name="q41" value="3"> <?php echo $lang['A413']?>  <br>
                              <input type="radio" name="q41" value="4"> <?php echo $lang['A414']?> <br><br>
                           </div>

                          <b><?php echo $lang['q42']?> <br></b>
                          <div style="margin-left: 30px">
                              <input type="number" name="when" id="when" placeholder="In which month [number]"></div>


                           <b><?php echo $lang['q43']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q43" value="1"> <?php echo $lang['A431']?> <br>
                              <input type="radio" name="q43" value="2"> <?php echo $lang['A132']?> <br>
                              <input type="radio" name="q43" value="3"> <?php echo $lang['A433']?>  <br>
                              <input type="radio" name="q43" value="4"> <?php echo $lang['A434']?> <br><br>
                           </div>

                           <b><?php echo $lang['q44']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q44" value="1"> <?php echo $lang['A441']?> <br>
                              <input type="radio" name="q44" value="2"> <?php echo $lang['A442']?> <br>
                              <input type="radio" name="q44" value="3"> <?php echo $lang['A443']?>  <br>
                              <input type="radio" name="q44" value="4"> <?php echo $lang['A444']?> <br><br>
                           </div>


                 <h4 style="background-color: SlateBlue; color: White"><b><?php echo $lang['description5']?> <br></b></h4>

                            <b><?php echo $lang['q51']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q51" value="1"> <?php echo $lang['A511']?> <br>
                              <input type="radio" name="q51" value="2"> <?php echo $lang['A512']?> <br>
                              <input type="radio" name="q51" value="3"> <?php echo $lang['A513']?>  <br>
                              <input type="radio" name="q51" value="4"> <?php echo $lang['A514']?> <br><br>
                           </div>

                            <b><?php echo $lang['q52']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q52" value="1"> <?php echo $lang['A521']?> <br>
                              <input type="radio" name="q52" value="2"> <?php echo $lang['A522']?> <br>
                              <input type="radio" name="q52" value="3"> <?php echo $lang['A523']?>  <br>
                              <input type="radio" name="q52" value="4"> <?php echo $lang['A524']?> <br>
                              <input type="radio" name="q52" value="4"> <?php echo $lang['A525']?> <br><br>
                           </div>

                            <b><?php echo $lang['q53']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q53" value="1"> <?php echo $lang['A531']?> <br>
                              <input type="radio" name="q53" value="2"> <?php echo $lang['A532']?> <br>
                              <input type="radio" name="q53" value="3"> <?php echo $lang['A533']?>  <br><br>
                           </div>
                            
                            <b><?php echo $lang['q54']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q54" value="1"> <?php echo $lang['A541']?> <br>
                              <input type="radio" name="q54" value="2"> <?php echo $lang['A542']?> <br>
                              <input type="radio" name="q54" value="3"> <?php echo $lang['A543']?>  <br>
                              <input type="radio" name="q54" value="4"> <?php echo $lang['A544']?> <br>
                              <input type="radio" name="q54" value="4"> <?php echo $lang['A545']?> <br><br>
                           </div>

                            <b><?php echo $lang['q55']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="radio" name="q55" value="1"> <?php echo $lang['A551']?> <br>
                              <input type="radio" name="q55" value="2"> <?php echo $lang['A552']?> <br>
                              <input type="radio" name="q55" value="3"> <?php echo $lang['A553']?>  <br>
                              <input type="radio" name="q55" value="4"> <?php echo $lang['A554']?> <br><br>
                           </div>

                           <b><?php echo $lang['q56']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a56[]" value="1"> <?php echo $lang['A561']?> <br>
                              <input type="checkbox" name="a56[]" value="2"> <?php echo $lang['A562']?> <br>
                              <input type="checkbox" name="a56[]" value="3"> <?php echo $lang['A563']?> <br>
                              <input type="checkbox" name="a56[]" value="4"> <?php echo $lang['A564']?> <br>
                              <input type="checkbox" name="a56[]" value="5"> <?php echo $lang['A565']?> <br>
                              <input type="checkbox" name="a56[]" value="5"> <?php echo $lang['A566']?> <br>
                              <input type="checkbox" name="a56[]" value="5"> <?php echo $lang['A567']?> <br>
                              <input type="checkbox" name="a56[]" value="5"> <?php echo $lang['A568']?> <br>
                              <input type="checkbox" name="a56[]" value="5"> <?php echo $lang['A569']?> <br>
                              <input type="checkbox" name="a56[]" value="5"> <?php echo $lang['A5610']?>  <br><br>
                            </div>

                            <b><?php echo $lang['q57']?></b><br>
                            <div style="margin-left: 30px">
                              <input type="checkbox" name="a57[]" value="1"> <?php echo $lang['A571']?> <br>
                              <input type="checkbox" name="a57[]" value="2"> <?php echo $lang['A572']?> <br>
                              <input type="checkbox" name="a57[]" value="3"> <?php echo $lang['A573']?> <br>
                              <input type="checkbox" name="a57[]" value="4"> <?php echo $lang['A574']?> <br>
                              <input type="checkbox" name="a57[]" value="5"> <?php echo $lang['A575']?> <br>
                              <input type="checkbox" name="a57[]" value="5"> <?php echo $lang['A576']?> <br>
                              <input type="checkbox" name="a57[]" value="5"> <?php echo $lang['A577']?> <br>
                              <input type="checkbox" name="a57[]" value="5"> <?php echo $lang['A578']?> <br>
                              <input type="checkbox" name="a57[]" value="5"> <?php echo $lang['A579']?> <br><br>
                            </div>

                            <div style="margin-left: 30px">
                                
                                <input class = "btn-primary" type="submit" name="submit" value="Submit" style="width: 120px; height: 40px; border-radius: 10px;">
                                <input type="reset" name="reset" value="reset" style="width: 120px; height: 40px; border-radius: 10px;">     </div>
    
                        

                    </form>

                

    </div>
<br><br><br><br>
    <div class="footer bg-dark">
        <a href="index.php?lang=en"><?php echo $lang['lang_en'] ?></a>
        | <a href="index.php?lang=am"><?php echo $lang['lang_am'] ?></a>
    </div>

<br><br><br>
 </body>
</html>