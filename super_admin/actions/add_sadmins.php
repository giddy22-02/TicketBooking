<?php
include ('../../actions/connect.php');
//session_start();
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
   
     
        $sql = "INSERT INTO s_admin (email,username,password)VALUES ('$email','$username','$password')";
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