<DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap3\css\bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap3\css\bootstrap-theme.min.css">
  <link rel="stylesheet" href="style1.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
    integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
    crossorigin="anonymous"></script>
  <script src="bootstrap3\js\bootstrap.min.js"></script>

  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <title>JQuery Validation Engine</title>
  <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css" />
  <link rel="stylesheet" href="jQuery-Validation-Engine-master/css/template.css" type="text/css" />
  <script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
  </script>
  <script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript"
    charset="utf-8">
    </script>
  <script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
  </script>
  <script>
    jQuery(document).ready(function () {
      // binds form submission and fields to the validation engine
      jQuery("#strdid1").validationEngine();
    });
  </script>
</head>

<body>


<nav class="navbar navbar-inverse">

    <!-- Brand and toggle get grouped for better mobile display -->
    
  

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse container-fluid" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right ">
      <li><a href="demo.php"><strong>Download</strong></a></li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  
</nav>
<br><br>
<?php

include 'connection.php';


extract($_POST);
$q=mysqli_query($con,"select e_ro from ch_password where sr_no=1") or die(mysqli_error($con));

$a=mysqli_fetch_array($q);

$b=$a['e_ro'];

$select=mysqli_query($con,"select * from student_result where enrollment_no='$b'") or die(mysqli_error($con));

$fetch=mysqli_fetch_array($select);

extract($fetch);

?>

<div class="row">
 <div class="col-sm-6"><label style="font-size: 17px;text-align:left;">Full Name: </label>
 <p style="font-size: 17px"><b><?php echo $f_name; ?></b></p>

 <label style="font-size: 17px;text-align:left;">Email: </label>
 <p style="font-size: 17px"><b><?php echo $email; ?></b></p>

 <label style="font-size: 17px;text-align:left;">Phone No: </label>
 <p style="font-size: 17px"><b><?php echo $phone_no; ?></b></p>
 </div>


<div class="col-sm-6">
  <label style="font-size: 17px;text-align:right;">Course: </label>
 <p style="font-size: 17px"><b><?php echo $course; ?></b></p>
 <label style="font-size: 17px;text-align:right;">Scheme: </label>
 <p style="font-size: 17px"><b> <?php echo $scheme; ?></b></p>
 <label style="font-size: 17px;text-align:right;">Enrollment No: </label>
 <p style="font-size: 17px"><b> <?php echo $enrollment_no; ?></b></p>
 </div>  
 
 
</div>
<br><br><br>

<table border="1" style="margin-left: 50px;" width="700">
<thread>
<tr style="text-align:center;">
<th>Subject</th>
<th>Marks</th>
<th >Total</th>
</tr>
</thread>

<tr>
<th>Maths</th>
<td><?php echo $maths; ?></td>
<td rowspan="2"><?php echo $total;?></td>
</tr> 

<tr>
<th>Science</th>
<td><?php echo $science; ?></td>

</tr> 

<tr>
<th>Percentage</th>
<td><?php echo $percentage."%";?> 
<td><?php echo $remark; ?></td>
</tr>
</body>
</html>
