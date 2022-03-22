<?php
include ('../../actions/connect.php');
session_start();
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $fromm = $_POST['fromm'];
    $too = $_POST['too'];
    $date = $_POST['date'];
    $fare = $_POST['fare'];
    $seat = $_POST['seat'];
    $regno = $_POST['regno']; 
    $driver = $_POST['driver']; 
    $admin = $_POST['admin']; 
    $branch = $_POST['branch'];
   
        
        $sql = "INSERT INTO bookings (fullname, phone, fromm,too,date,fare,seat,regno,driver,admin, branch)VALUES ('$fullname','$phone','$fromm','$too','$date','$fare',$seat,'$regno','$driver','$admin', '$branch')";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Inserted Successfully";
           header("Location: ../home.php");
        }else {
            die(mysqli_error($con));
            //$_SESSION['status'] = "Something Went wrong";
           //header("Location: ../home.php");
        }
    

?>