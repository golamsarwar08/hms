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
    <div class="container d-flex justify-content-center mb-4 mt-3"><a class="navbar-brand fs-2 fw-bold" href="index.html"><span class="text-primary fw-bold">Hospital</span> Management Center</a>
    </div>
    <div align="center">
        <h2 class="d-flex justify-content-center mb-5">Appointment</h2>
    </div>
    <form class="d-flex justify-content-center" action="appointmentconnect.php" method="POST">
        <table class="border border-primary w-75 h-75">
            <tr>
                <td>
                    <label>Enter Name</label>
                </td>
                <td>
                    <input class="w-100" type="text" name="Patient_Name">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Doctor Name</label>
                </td>
                <td>
                    <input class="w-100" type="text" name="Doctor_Name">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Department</label>
                </td>
                <td>
                    <input class="w-100" type="text" name="Department">
                </td>
            </tr>
            <tr>
                <td>
                    <label >Appointment Date</label>
                </td>
                <td>
                    <input class="w-100" type="text" name="App_Date">
                </td>
            </tr>
            <tr>
                <td>
                    <label >Appointment Time</label>
                </td>
                <td>
                    <input class="w-100" type="text" name="App_Time">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Phone</label>
                </td>
                <td>
                    <input class="w-100" type="text" name="Phone">
                </td>
            </tr>
            <tr>
            
                <td colspan="2" align="center"><input class="d-flex justify-content-center btn-danger"type="submit" name="save" value="submit"></input></td>

            </tr>
        </table>

    </form>



</body>
