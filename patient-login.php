<?php
    $email= $_POST['email'];
    $password= $_POST['password'];

    // Database Connection
    $con = new mysqli("localhost","root","","hospitalmanagement");

    if($con->connect_error){
        die("Try Again : ".$con->connect_error );
    } else {
        $stmt = $con->prepare("select * from patientlogin where email = ?");
        $stmt -> bind_param("s",$email);
        $stmt -> execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                $msg = 'Login Complete! Thanks';
                echo "<script> window.location.assign('patient.html'); </script>";
            }
            else{
                echo "Invalid Email Or Password";
            }
        } else{
            echo "Invalid email or password";
        }
    }
?>

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

    <a class="navbar-brand fs-2 fw-bold" href="index.html">
        <h1 class="text-center fw-bold mt-5 fs-1"><span class="text-primary">Hospital</span> Management Center</h1>
    </a>
    <p class="text-center fw-bold mt-3 fs-4"><span class=" text-primary">Patient</span> Login</p>
    <section class=" container d-flex justify-content-center mt-5 pt-5">
        <form action="#" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">

        </form>
    </section>

    <br><br>
    <p class="text-center fw-bold mt-3 fs-6">Have you forget your password? <a href="reset.php">Reset Here</a>
    <p class="text-center fw-bold mt-3 fs-6">If you don't have any account <a href="signup.php">Signup Here</a></p>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>