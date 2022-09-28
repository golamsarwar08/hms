<?php

$servername="localhost";
$username="root";
$password="";
$database_name = "hospitalmanagement";

$con = mysqli_connect($servername,$username,$password,$database_name);

if(!$con){

    die("Connection Failed".mysqli_connect_erro());

}

if(isset($_POST['save']))
{
    $Patient_Name = $_POST['Name'];
    $Doctor_Name = $_POST['Email'];
    $Department = $_POST['Department'];
    $App_Date = $_POST['Problem'];

    $sql_query = "INSERT INTO `contact us`(`Name`, `Email`, `Department`, `Problem`) VALUES ('$Name','$Email','$Department','$Problem')";

    if(mysqli_query($con,$sql_query)){
        echo "Your Appointment is Booked";
    }
    else{
        echo "Error : ".$sql. "".mysqli_error($con);
    }
    mysqli_close($con);

}

?>