<?php
include ('../../actions/connect.php');
session_start();
    $branch = $_POST['branch'];
    $yf = $_POST['yf']; 
    $manager = $_POST['manager']; 
   
        $sql = "INSERT INTO branches (branch, yf, manager)VALUES ('$branch','$yf','$manager')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: ../branches.php");
        }else {
             echo "connection problem";
            $_SESSION['status'] = "Something Went wrong";
            header("Location: ../branches.php");
        }
    

?>