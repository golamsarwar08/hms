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
    $Patient_Name = $_POST['Patient_Name'];
    $Doctor_Name = $_POST['Doctor_Name'];
    $Department = $_POST['Department'];
    $App_Date = $_POST['App_Date'];
    $App_Time = $_POST['App_Time'];
    $Phone = $_POST['Phone'];

    $sql_query = "INSERT INTO `appointment`(`Doctor_Name`, `Department`, `App_Date`, `App_Time`, `Patient_Name`, `Phone`) VALUES ('$Doctor_Name','$Department','$App_Date','$App_Time','$Patient_Name','$Phone')";

    if(mysqli_query($con,$sql_query)){
        echo "Your Appointment is Booked";
    }
    else{
        echo "Error : ".$sql. "".mysqli_error($con);
    }
    mysqli_close($con);

}

?>