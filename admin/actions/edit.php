


     <?php 
//===Connection to the Database====================
include ('../../actions/connect.php');
 //Session start
 //session_start();
 $id = $_POST['id'];

    $query = "SELECT* FROM bookings WHERE id ='$id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
     <div class="container my-5 d-flex justify-content-center">
         <div class="jumbotron d-flex justify-content-center bg-light rounded" style="width:500px;" id="receipt">
             <hr>
             <!-- Receipt-->
             <form class="my-5" action="" method="POST" enctype="multipart/form-data" lass="p-3" style="width:400px;">
                 <input type="hidden" name="id" value="<?php echo $row['id']?>">
                 <div class="mb-3" style="width:400px;">
                     <input type="hidden" class="form-control w-80 m-auto" name="admin"
                         value="<?php echo  $_SESSION['username'];?>" required="required">
                 </div>
                 <div >
                     <pre>
                     <img src="../../assets/images/logo2.png" width="60" height="60"><br>
                     <small><b>Muchai Travellers</b></small>
                     <small>P.O BOX 1-00100, Nairobi</small>
                     <small>info@muchaitravellers.org</small>
                     <small>+254789365/+254725485960</small>
                     </pre>
                 </div>
                  
                 <hr>
                 <p style="font-weight: bold;">Passenger's Information</p>
                     <pre> <label for="fullname">Full Name:        <?php echo $row['fullname']?></pre>
                     <pre> <label for="Phone No">Phone:            <?php echo $row['phone']?></pre>
                     <pre> <label for="from">From: <?php echo $row['fromm']?>       <label for="to">To: <?php echo $row['too']?></pre>
                     <pre> <label for="date">Date: <?php echo $row['date']?></pre>
                     <pre> <label for="fare">Fare(Kshs): <?php echo $row['fare']?></pre>
                        <hr>
                <p style="font-weight:bold" >Bus's Information</p>
                     <pre> <label for="regno">Bus Reg: <?php echo $row['regno']?></pre>
                     <pre> <label for="driver">Driver's Name: <?php echo $row['driver']?></pre>
                 <hr>
                 <pre> Served by:<?php echo  $_SESSION['username'];?></pre>
         </div>
         </form>
          <div class="mb-3">
                    <p><a href="../candidates.php" class="btn btn-danger">Cancel</a></p>
                    <p><input type="button" class="btn btn-secondary" onclick="myPrint('receipt')" value="Print Receipt"></p>
                 </div>
      
     </div>
     </div>
     <?php
        } 
    }

  ?>
         <script>
             function myPrint(receipt) {
                 var printdata = document.getElementById(receipt);
                 newwin = window.open("");
                 newwin.document.write(printdata.outerHTML);
                 newwin.print();
                 newwin.close();
             }
         </script>
