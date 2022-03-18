<?php
include ('../../actions/connect.php');
//session_start();
    $from = $_POST['fromm'];
    $to = $_POST['too']; 
   
        $sql = "INSERT INTO routes (fromm, too)VALUES ('$from','$to')";
        $result = mysqli_query($con, $sql);
        if ($result) {
             echo "Added successfully";
            //$_SESSION['status'] = "Inserted Successfully";
            //header("Location: ../admins.php");
        }else {
             echo "connection problem";
           // $_SESSION['status'] = "Something Went wrong";
            //header("Location: ../admins.php");
        }
    

?>