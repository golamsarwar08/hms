<?php

ob_start();
session_start();

// if($_SESSION['name']!='oasis')
// {
//   header('location: ');
// }
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
<a class="navbar-brand fs-2 fw-bold d-flex justify-content-center mt-3 mb-3" href="index.html"><span class="text-primary fw-bold">Hospital  </span>   Management Center</a>
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
          <a class="nav-link" href="appointmentlist.php">Appointment List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class=" container d-flex justify-content-center mb-3"><h2 class="fw-bold text-primary align-text-center">Doctor List</h2></div>
    <table class="table table-striped px-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Department</th>
                <th scope="col">Email</th>
                <th scope="col">Fees</th>
                <th scope="col">Phone No.</th>
            </tr>
        </thead>

        <?php

        $i=0;
        $tcr_query = mysqli_query($conn,"select * from doctorlist order by dc_id asc");
        while($tcr_data = mysqli_fetch_array($tcr_query)){
          $i++;

        ?>
          <tbody>
              <tr>
                <td><?php echo $tcr_data['dc_id']; ?></td>
                <td><?php echo $tcr_data['Name']; ?></td>
                <td><?php echo $tcr_data['Department']; ?></td>
                <td><?php echo $tcr_data['Email']; ?></td>
                <td><?php echo $tcr_data['Fees']; ?></td>
                <td><?php echo $tcr_data['Phone No.']; ?></td>
              </tr>
          </tbody>

          <?php } ?>
    </table>

</body>
</html>