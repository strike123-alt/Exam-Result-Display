<!DOCTYPE html>
<html lang="en">

  

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>msbte result</title>
  <link rel="stylesheet" href="bootstrap3\css\bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap3\css\bootstrap-theme.min.css">
  <link rel="stylesheet" href="style1.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
  <script src="bootstrap3\js\bootstrap.min.js"></script>
</head>

  

<body>
  


<?php

  include 'connection.php';  


  $q1 = mysqli_query($con, "select e_ro from ch_password") or die(mysqli_error($con));

  $total = mysqli_fetch_array($q1);

  extract($total);

  $q2 = mysqli_query($con, "select * from student_result where enrollment_no = '$e_ro'");
 
  $total1 = mysqli_fetch_array($q2);

  extract($total1);



  


?>
<h1 style="text-align: center">Maharashtra State Board of Technical Education</h1>
<h2 style="text-align: center">Result of <?php echo $course; ?></h2><br><br>
<div style="font-family:New Time Roman; font-size:21px; text-align: center;">
<div class = "row">
<div class="col-sm-6">
<p>Name: <?php echo $f_name; ?></p>
<p>Course: <?php echo $course;?></p>
<p>Phone No: <?php echo $phone_no;?></p>
</div>
<div class="col-sm-6">
<p>Enrollment No: <?php echo $e_ro; ?></p>
<p>Scheme: <?php echo $scheme;?></p>
<p>Email: <?php echo $email;?></p>
</div>
</div>
</div>
<br><br>

<table style= "text-align: center;margin-left:auto;margin-right:auto ;width: 550px" border=2 >
<tr>
  <th  style="text-align: center;">Subject</th> 
  <th style="text-align: center">Marks</th>
  <th style="text-align: center;">Total</th>
</tr>
<tr>
  <th style="text-align: center;">Maths</th>
  <td style="text-align: center;"><?php echo $maths;?></td>
  <td style="text-align: center;" rowspan=2><?php echo $total;?></td>
</tr>
<tr>
  <th  style="text-align: center;">Science</th>
  <td  style="text-align: center;"><?php echo $science;?></td>
 
</tr>
<tr>
  <th style="text-align: center;">Percentage</th>
  <td style="text-align: center"><?php echo $percentage;?></td>
  <td style="text-align: center"><?php echo $remark;?></td>
</tr>
</table>

</body>
</html>