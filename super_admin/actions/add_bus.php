<?php
include ('../../actions/connect.php');
session_start();
    $branch = $_POST['branch'];
    $regno = $_POST['regno'];
    $yop = $_POST['yop'];
    $color = $_POST['color'];
    
   
   
     //Check if the candidate ID Already Exist
     $check_id = mysqli_num_rows(mysqli_query($con, "SELECT regno FROM buses WHERE  regno='$regno'"));
     if ($check_id > 0) {
        $_SESSION['status'] = "Bus Reg No Already Exist";
        header("Location: ../buses.php");
    }else{
        $sql = "INSERT INTO buses (branch,regno,yop,color)VALUES ('$branch',' $regno','$yop','$color')";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: ../buses.php");
        }else {
            
             $_SESSION['status'] = "Something Went wrong";
             header("Location: ../buses.php");
        }
    }

?>