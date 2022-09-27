<?php
    $email= $_POST['email'];
    $password= $_POST['password'];

    // Database Connection
    $con = new mysqli("localhost","root","","logindb");

    if($con->connect_error){
        die("Try Again : ".$con->connect_error );
    } else {
        $stmt = $con->prepare("select * from login where email = ?");
        $stmt -> bind_param("s",$email);
        $stmt -> execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows>0){
            $data = $stmt_result->fetch_assoc();
            if($data['password']===$password){
                $msg = 'Login Complete! Thanks';
                echo "<script> window.location.assign(''); </script>";
            }
            else{
                echo "Invalid Email Or Password";
            }
        } else{
            echo "Invalid email or password";
        }
    }
?>