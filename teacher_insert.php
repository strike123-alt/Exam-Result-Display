<!DOCTYPE html>
<html>

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
      jQuery("#form1").validationEngine();
    });
  </script>
</head>
<body>

 <?php 
 
include 'connection.php';
if(isset($_POST['save']))

{
  extract($_POST);

  $query=mysqli_query($con,"insert into teacher_info(t_name,t_username,t_password)values('$t_name','$t_username','$t_password')") or die (mysqli_error($con));

  if($query)
  {
    echo "<script>";
    echo "alert('Successfully values are inserted');";
    echo "</script>";
  }

  else
  {
    echo "<script>";
    echo "alert('Not Successfully');";
    echo "</script>";
  }


}


 ?>

  <!-- Teacher Register -->
  <nav class="navbar navbar-inverse" id="navbardid1" style="margin-bottom:0px;">
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

  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
      <div class="panel panel-default panel-primary">
        <div class="panel-heading" >
          <h2 class="panel-title" >Teacher Registration form</h2>
        </div>
        <div class="panel-body">

          <form id="form1" name="asformid1" action="" method="POST">

            <div class="form-group ">
              <label for="strid1" >Full Name: </label><br>
              <input type="text" class="form-control validate[required,custom[onlyLetterSp]] text-input" id="strfd1" name="t_name"
                placeholder="Your Full Name." maxlength="60">
            </div>


             <div class="form-group ">
              <label for="strid2" >Username: </label><br>
              <input type="text" class="form-control validate[required] text-input" id="strid2" name="t_username"
                placeholder="Username." maxlength="12">
            </div>



            

            
             <div class="form-group ">
              <label for="strid3"> Password: </label><br>
              <input type="text" class="form-control validate[required]" id="strfid3" placeholder="Password" name="t_password" maxlength="6" >
            </div>


            <input type="submit" class="form-control btn-success" id="strid4" name="save" style="margin-left: auto; margin-right: auto;  width: 75px;  text-align:center;" value="Save">

          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-2"></div>
  </div>






</body>
</html>