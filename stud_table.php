<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
</head>
<body>
  


<?php

  include 'connection.php';  
  


  $enroll=$_POST['enroll'];

 

 $query1=mysqli_query($con,"update ch_password set e_ro='$enroll' where sr_no=1"); 


 $query=mysqli_query($con,"select * from 	student_result where enrollment_no='$enroll'")
        or die(mysqli_error($con));


 $array=mysqli_fetch_array($query); 



 if($array['enrollment_no']===$enroll && $enroll!="")
 {
   header("location: student_result_display.php");
 }
 else 
 {
    header("location: student_result_find.php");
 }


?>

</body>
</html>