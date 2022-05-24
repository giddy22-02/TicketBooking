<!DOCTYPE html>
<html lang="en">

<head>
    <!--Title-->
    <title>update-data</title>
    <!--Meta Info-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Gideon Kiplangat">
    <!-- description -->
    <meta name="description" content="Online voting system.">
    <!-- keywords -->
    <meta name="keywords" content="Voters, votes, voting">
    <!--Bootstrap files-->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--Custom CSS File-->
    <link rel="stylesheet" href="../" />
</head>

<body class="bg-dark">
    <?php 
//===Connection to the Database====================
include ('../../actions/connect.php');
 //Session start
 session_start();
 $id = $_POST['id'];

    $query = "SELECT* FROM bookings WHERE id ='$id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
    <div class="container text-center my-5 d-flex justify-content-center">
        <div class="jumbotron d-flex justify-content-center bg-light rounded" style="width:500px;">

            <hr>
            <!-- Modal  For Adding New Candidates-->
            <form class="my-5" action="" method="POST" enctype="multipart/form-data" lass="p-3" style="width:400px;">
                <h4 class="text-center">Update Data</h4>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
               
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="fullname"
                        value="<?php echo $row['fullname']?>" required="required">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control w-80 m-auto" name="phone" value="<?php echo $row['phone']?>"
                         required="required" minlength="10" maxlength="10">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="too" value="<?php echo $row['too']?>"
                         required="required">
                </div>
                <div class="mb-3">
                    <input type="date" class="form-control w-80 m-auto" name="date" value="<?php echo $row['date']?>"
                       required="required">
                </div>
                <div class="mb-3">
                    <input type="number" class="form-control w-80 m-auto" name="fare" value="<?php echo $row['fare']?>">
                </div>
                <div class="mb-3">
                    <select name="seat" class="form-control w-80 m-auto" value="<?php echo $row['seat']?>">
                       <option>--Select--</option>
                                    <option value="01">S01</option>
                                    <option value="02">S02</option>
                                    <option value="03">S03</option>
                                    <option value="04">S04</option>
                                    <option value="05">S05</option>
                                    <option value="06">S06</option>
                                    <option value="07">S07</option>
                                    <option value="08">S08</option>
                                    <option value="09">S09</option>
                                    <option value="10">S10</option>
                                    <option value="11">S11</option>
                                    <option value="12">S12</option>
                                    <option value="13">S13</option>
                                    <option value="14">S14</option>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="regno" value="<?php echo $row['regno']?>"
                        required="required">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control w-80 m-auto" name="driver" value="<?php echo $row['driver']?>"
                       required="required">
                </div>
                <div class="mb-3">
                    <a href="../home.php" class="btn btn-danger">Cancel</a>
                    <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                </div>
        </div>
        </form>
        <?php
        if(isset($_POST['update']))
        {
             $fullname = $_POST['fullname'];
             $phone = $_POST['phone'];
             $too = $_POST['too'];
             $date = $_POST['date'];
             $fare = $_POST['fare'];
             $seat = $_POST['seat'];
             $regno = $_POST['regno']; 
             $driver = $_POST['driver']; 
            

             $query ="UPDATE bookings SET 
             fullname='$fullname',
             phone=' $phone',
             too='$too',
             date='$date',
             fare='$fare',
             seat='$seat',
             regno='$regno',
             driver='$driver'
     WHERE id='$id'";
              $query_run = mysqli_query($con, $query);
               if($query_run){
                   $_SESSION['status'] = "Updated Successfully";
                   header("Location: ../home.php");
                }else{
                    $_SESSION['status'] = "There was an error, Try Again";
                    header("Location: ../home.php");
                }
        }
        ?>
    </div>
    </div>
    <?php
        }
    }else
    {
        $_SESSION['status'] = "Data not Deleted";
        header("Location: ../home.php");
    }

  ?>
</body>

</html>