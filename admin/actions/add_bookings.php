<?php
include ('../../actions/connect.php');
session_start();
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $fromm = $_POST['fromm'];
    $too = $_POST['too'];
    $date = $_POST['date'];
    $fare = $_POST['fare'];
    $regno = $_POST['regno']; 
    $driver = $_POST['driver']; 
    $admin = $_POST['admin']; 
   
        
        $sql = "INSERT INTO bookings (fullname, phone, fromm,too,date,fare,regno,driver,admin)VALUES ('$fullname','$phone','$fromm','$too','$date','$fare','$regno','$driver','$admin')";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Inserted Successfully";
           header("Location: ../bookings.php");
        }else {
           
            $_SESSION['status'] = "Something Went wrong";
           header("Location: ../bookings.php");
        }
    

?>