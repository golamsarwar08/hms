<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: doctor.html');
}
?>
<?php include('doctorconnect.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CDN -->
    <title>Hospital Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css
    ">

    <!--google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d0b11ec7af.js" crossorigin="anonymous"></script>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<a class="navbar-brand fs-2 fw-bold d-flex justify-content-center mt-3 mb-3" href="#"><span class="text-primary fw-bold">Hospital  </span>   Management Center</a>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 d-flex justify-content-center">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="doctor.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="doctorlist.php">Doctor List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.php">Appointment List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="row">

  <div class="content">
    <h3>Patient Info</h3>
    <br>
    <form method="post" action="">
      <label>Enter Patient ID</label>
      <input type="text" required name="pt_id">
      <input type="submit" name="pt_btn" value="Go!" >
    </form>
    <br>
    <table class="table table-stripped">
      <thead>
        <tr>
          <th scope="col">Patient ID</th>
          <th scope="col">Name</th>
          <th scope="col">Age</th>
          <th scope="col">Weigth</th>
          <th scope="col">Address</th>
          <th scope="col">Problem</th>
        </tr>
      </thead>

   <?php

    if(isset($_POST['pt_btn'])){
     
     $pt_id = $_POST['pt_id'];
     $i=0;
     
     $all_query = mysqli_query($conn,"select * from patientinfo where patientinfo.pt_id = '$pt_id' ");
     
     while ($data = mysqli_fetch_array($all_query)) {
       $i++;
     
     ?>
  <tbody>
     <tr>
       <td><?php echo $data['pt_id']; ?></td>
       <td><?php echo $data['Name']; ?></td>
       <td><?php echo $data['Age']; ?></td>
       <td><?php echo $data['Weigth']; ?></td>
       <td><?php echo $data['Address']; ?></td>
       <td><?php echo $data['Problem']; ?></td>
     </tr>
  </tbody>

     <?php 
          } 
              }
      ?>
      
    </table>

  </div>

</div>

</center>

</body>
</html>
