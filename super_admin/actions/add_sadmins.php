<?php
include ('../../actions/connect.php');
//session_start();
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
   
     
        $sql = "INSERT INTO s_admin (username,password)VALUES ('$username','$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
             echo "Added successfully";
            //$_SESSION['status'] = "Inserted Successfully";
            header("Location: ../admins.php");
        }else {
             echo "connection problem";
           // $_SESSION['status'] = "Something Went wrong";
            header("Location: ../admins.php");
        }
    

?>