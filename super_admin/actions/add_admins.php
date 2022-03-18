<?php
include ('../../actions/connect.php');
session_start();
    $branch = $_POST['branch'];
    $image = $_FILES['photo']['name'];
    $tmp_name = $_FILES['photo']['tmp_name'];
    $idno = $_POST['idno'];
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password']; 
   
   
     //Check if the candidate ID Already Exist
     $check_id = mysqli_num_rows(mysqli_query($con, "SELECT idno FROM admins WHERE  idno='$idno'"));
     if ($check_id > 0) {
        $_SESSION['status'] = "The ID you entered is  Already taken";
        header("Location: ../admins.php");
    }else{
        move_uploaded_file($tmp_name, "../uploads/$image");
        $sql = "INSERT INTO admins (branch, photo, idno,fullname,username,email,phone,password)VALUES ('$branch','$image','$idno','$fullname','$username','$email','$phone','$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
           
            $_SESSION['status'] = "Inserted Successfully";
            header("Location: ../admins.php");
        }else {
           
            $_SESSION['status'] = "Something Went wrong";
            header("Location: ../admins.php");
        }
    }

?>