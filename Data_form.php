<!DOCTYPE html>
<?php  include('dbconnect.php'); ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<h3>Talk here!</h3>
<div>

  <form action="#" method="post">
    <table border="0" width="50%" align="center">
        <tr><td>
    <label for="comment">Any question:</label>
    </td><td>
    <textarea id="posts" name="posts" rows="5" cols="60" placeholder="What's in your mind about WSU?"></textarea>
    
</td></tr><tr><td>  
    <input type="submit" value="post" name="submit" id="submit">
    </td><td>
    <input type="reset" value="Clear">
</td></tr></table>
  </form>
</div>
<div>
<?php
        if (isset($_POST['submit'])) {

            $post=$_POST['posts'];
            $pdate = date("y-m-d");
            $pid = "wsu".date("y").date("m").date("d").date("h").date("i").date("s");
            $pby = "temesgen";
            $sql = "insert into dialog (pid,content,Posted_by,Posted_date) 
                    values ('".$pid."','".$post."','".$pby."','".$pdate."')";
               if($conn->query($sql)){
                
                ?>
            <script>
                document.getElementById("cs_status").innerHTML = "One new college / school is added successfully!";
            </script>
<?php
                   }
                    else{
                echo "Error:".$sql."<br>" . $conn->error;
?>
            <script>
                document.getElementById("cs_status").innerHTML = "Something went wrong  while inserting college";
            </script>

<?php
            }
        
       } 
?>

</div>
</body>

</html>