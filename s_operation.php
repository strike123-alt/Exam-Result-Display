<!DOCTYPE html>
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
      jQuery("#formstr").validationEngine();
    });
  </script>
</head>

<body>

<nav class="navbar navbar-inverse" id="navbardid0" style="margin-bottom:0px;">
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
        
        <ul class="nav navbar-nav navbar-right" style="margin-bottom:2px;">
          <li><a href="admin_login.php"><b>Sign-Out</b></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Teacher</b><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="teacher_insert.php">Insert Teacher list</a></li>
              <li><a href="view_teacher.php">View Teacher list</a></li>
             </ul>
          </li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Student</b> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="stud_insert.php">Insert Student list</a></li>
              <li><a href="view_student.php">View Student list</a></li>
             </ul>
          </li>
         
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
<br><br><br>
<?php

include 'connection.php';

  if(isset($_GET['delete']))
  {
  $e=$_GET['delete'];
  $q=mysqli_query($con,"delete from student_result where enrollment_no='$e'");
  header("location: view_student.php");
  }
  

  if(isset($_GET['edit']))
  {
    $u=$_GET['edit'];
    if(isset($_POST['save'])){ 
      extract($_POST);
      $t=$maths+$science;
      $p=($t/2);
      $r="pass";
      if($maths<33)
      {
        $r="fail";      
      }
      else if($science<33)
      {
        $r="fail";
      }
    
      $q1=mysqli_query($con,"update student_result set f_name='$f_name', course='$course', scheme='$scheme', enrollment_no='$enrollment_no', email='$email', phone_no='$phone_no1',maths='$maths',science='$science',total='$t',percentage='$p',remark='$r' where enrollment_no='$u'") or die(mysqli_error($con));
       }
  
?>
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="panel panel-default panel-primary">
        <div class="panel-heading" >
          <h2 class="panel-title" >Update form</h2>
        </div>
        <div class="panel-body">

          <form id="formstr" name="asformid1" action="" method="POST">
            <div class="form-group ">
              <label for="strfid1" >Name: </label><br>
              <input type="text" class="form-control validate[required,custom[onlyLetterSp]] text-input" id="strfid1" name="f_name"
                placeholder="Your Full Name." maxlength="32">
            </div>


            <div class="form-group ">
              <label for="strfid2">Course: </label><br>
              <select class="form-control" id="strfid2" name="course">
                <option>CO-1</option>
                <option>CO-2</option>
                <option>CO-3</option>
                <option>CO-4</option>
                <option>CO-5</option>
                <option>CO-6</option>
              </select>
            </div>

            <div class="form-group " >
              <label for="strfid3">Scheme: </label><br>
              <select class="form-control" id="strfid3" name="scheme">
                <option>I</option>
                <option>G</option>
                <option>H</option>
                <option>T</option>
                <option>E</option>
              </select>
            </div>

            <div class="form-group ">
              <label for="strfid4">Enrollment No: </label><br>
              <input type="text"
                class="form-control 	validate[required,custom[integer],min[1900000000], number-input"
                id="strfid4" name="enrollment_no" placeholder="Enrollment No." maxlength="10">
            </div>

            <div class="form-group ">
              <label for="strfid5">Email: </label><br>
              <input type="text" class="form-control validate[required,custom[email]] " id="strfid5" name="email" value=".com">
            </div>

            <div class="form-group ">
              <label for="strfid6"> Phone No: </label><br>
              <input type="text" class="form-control validate[required] to" id="strfid6" placeholder="Phone No" name="phone_no1" maxlength="10" >
            </div>

             <div class="form-group ">
              <label for="strfid8"> Maths: </label><br>
              <input type="text" class="form-control validate[required] to" id="strfid8" placeholder="Marks in Maths" name="maths" maxlength="6" >
            </div>           

            
             <div class="form-group ">
              <label for="strfid9"> Science: </label><br>
              <input type="text" class="form-control validate[required] to" id="strfid9" placeholder="Marks in Science" name="science" maxlength="6" >
            </div>


            <input type="submit" class="form-control btn-success" id="strfid7" name="save" value="Save">

          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
  </div>




<?php
 
  }
?>
  
  </body>
</html>
