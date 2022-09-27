<?php 
  
  include('doctorconnect.php');


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Class Attendance Management System</title>
<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
   <!-- Bootstrap CDN -->
   <title>Hospital Management System</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    ">

  <!--google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
   
  <link rel="stylesheet" href="styles.css" >
   
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>


<header>
  <h1 class="d-flex justify-content-center container fw-bold mt-5 mb-3 fs-1"><span class="text-primary">Hospital</span> Management System</h1>
  <div class="navbar">
  <a href="index.php">Login</a>

</div>

</header>

<center>

<div class="content">
    <div class="row">

    <form method="post" class="form-horizontal col-md-6 col-md-offset-3">
    <h3>Recover your password</h3>

      <div class="form-group">

          <label for="input1" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="email" name="email"  class="form-control" id="input1" placeholder="your email" />
          </div>
      </div>

      <input type="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Go" name="reset" />
    </form>

      <br>

      <?php

          if(isset($_POST['reset'])){

          $test = $_POST['email'];
          $row = 0;
          $query = mysqli_query($conn,"select password from admininfo where email = '$test'");
          $row = mysqli_num_rows($query);

          if($row == 0){
?>
      <div  class="content"><p>Email is not associated with any account. Contact OAMS 1.0</p></div>

<?php
          }

          else{

            $query = mysqli_query($conn,"select password from admininfo where email = '$test'");
            $i =0;
            while($dat = mysqli_fetch_array($query)){
                $i++;
?>
  <strong>
  <p style="text-align: left;">Hi there!<br>You requested for a password recovery. You may <a href="index.php">Login here</a> and enter this key as your password to login. Recovery key: <mark><?php echo $dat['password']; ?></mark><br>Regards,<br>Online Attendance Management System 1.0</p></strong>
<?php
      }
          }
  }


       ?>

  </div>

</div>

</center>

</body>
</html>
