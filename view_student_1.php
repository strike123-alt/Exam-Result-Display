<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  </head>
<body>
	<nav class="navbar navbar-inverse"  style="margin-top: 0px;">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right" style="margin-top:5px;">           
           <li><a href=" student_result_find.php"><b>Sign-Out</b></a></li>
          
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
  </nav>

	<?php

		include 'connection.php';
		$select=mysqli_query($con,"select * from student_result") or die(mysqli_error($con));
		# $total=mysqli_num_row($select);

		

	?>




<table class="table table-bordered  table-striped table-hover" style="text-align:center;">
	<thread>
		<tr>
			<th>Sr No</th>
			<th>Full Name</th>
			<th>Course
			<th>Scheme</th>
			<th>Enrollment no</th>
			<th>Email</th>
			<th>Phone no</th>			
			<th>Maths</th>
			<th>Science</th>
			<th>Total</th>
			<th>Percentage</th>
			<th>Remark</th>
			
		</tr>
	</thread>

	<?php
		$count=0;
		
		
		while($fetch=mysqli_fetch_array($select))
		{

			extract($fetch);
			

	?>
	
			
			


	
		<tr>
			<td><?php
						echo ++$count;
			     ?>		     	
			</td>
			<td><?php echo $f_name;  ?></td>
			<td><?php echo $course; ?></td>
			<td><?php echo $scheme; ?></td>
			<td><?php echo $enrollment_no;  ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $phone_no; ?></td>
			<td><?php echo $maths; ?></td>
			<td><?php echo $science;  ?></td>
			<td><?php echo $total; ?></td>
			<td><?php echo $percentage."%"; ?></td>
			<td><?php echo $remark; ?></td>
			


			
		
		</tr>




		<?php
		}
	  ?>
	</table>
</body>
</html>