<?php

 $con= mysqli_connect("localhost", "root", "", "muchaitickets");
if(!$con){
    die(mysqli_error($con));
}else{
    echo "connection successfully";
}

?>