
  <?php
    $con=mysqli_connect("localhost:3307","root","","mini_db") or (mysqli_error($con));
    if(!($con))
    {
        echo "<script>";
        echo "alert('Connection is not establish');"; 
        echo "</script>";      
    }
    
 ?>