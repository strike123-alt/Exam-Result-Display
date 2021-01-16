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
      jQuery("#formal3").validationEngine();
    });
  </script>
</head>
<?php

include 'connection.php';

if(isset($_POST['save']))
{
  $c=0;
  extract($_POST);
  $query=mysqli_query($con,"select * from teacher_info") or die(mysqli_error($con));
  while($fetch=mysqli_fetch_array($query))
  {
  extract($fetch);
  if($fetch['t_username']===$t_user && $fetch['t_password']===$t_pass)
  {
      $c+=1;
      header("location: view_student_1.php");
    
  }
 }
  if($c==0)
  {
      header("location: teacher_login.php");
  }

}
?>
<body>
  <nav class="navbar navbar-default" id="navbardid1">
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
        <ul class="nav navbar-nav navbar-left">
          <li><a href="index.php"><img 
                src="https://1.bp.blogspot.com/-JjTDDYBo8C4/T-X_8ZLWMjI/AAAAAAAAAcs/K-08X0SA8_M/s320/MSBTE.JPG"
                width="75px" height="75px" id="brand"></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="margin-top:13px;">
           <li><a href="student_result_find.php"><b>Result</b></a></li>
          <li><a href="teacher_login.php"><b>Teacher Log-In</b></a></li>
          <li><a href="admin_login.php"><b>Admin Log-In</b></a></li>
          <li><a href="contact_us.php"><b>About Us</b></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <br> <br> <br> <br> <br> 
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" id="alfgsid1">
      <div class="panel panel-default panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Teacher Log-In</h3>
        </div>
        <div class="panel-body">
          <form id="formal3" action="" method="POST">
              <div class="form-group">
                <label for="falid1" class="la">Teacher User-Id: </label><br>
                <input type="text" class="form-control validate[required] text-input" id="strfid1" name="t_user"
                  placeholder="Teacher User-Id ." maxlength="12">
              </div>

              <div class="form-group ">
                <label for="falid2" class="la">Password: </label><br>
                <input type="password" class="form-control form-control validate[required]" id="falid2" name="t_pass" placeholder="Password."><br>
                <button type="button" class="btn btn-default" aria-label="Right Align" onclick="myFunction()">
                  <span class="glyphicon glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                </button>
              </div>

              <input type="submit" class="form-control btn-success" id="strfid7" name="save"  value="Login">
            </form>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>

  <nav class="navbar navbar-inverse"  style="margin-top: 95px;">
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
          <ul class="nav navbar-nav navbar-left">
            <li><a href="https://www.ssvps.org/"><h4>Design SSVPS's Student.</h4></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right" style="margin-top:5px;">
           <li><a href="https://www.facebook.com/msbte/"><p style="font-size:35px">f</p></a></li>
           <li><a href="https://msbte.org.in/"><p style="font-size:32px">G+</p></a></li>
          
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    
  </nav>
  <script>
function myFunction() {
  var x = document.getElementById("falid2");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}  </script>
</body>

</html>