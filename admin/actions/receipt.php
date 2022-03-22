

     <?php 
//===Connection to the Database====================
//include ('../../actions/connect.php');
 //Session start
 //session_start();
 $id = $_POST['id'];

    $query = "SELECT* FROM bookings WHERE id ='$id'";
    $query_run = mysqli_query($con, $query);
    
    if($query_run){
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
     <div class="container">
         <div class="jumbotron d-flex justify-content-center rounded" style="width:500px;" id="receipt">
             <hr>
             <!-- Receipt-->
             <form class="my-1" action="" method="POST" enctype="multipart/form-data" lass="p-3" style="width:400px;" id="addnew" >
                 <input type="hidden" name="id" value="<?php echo $row['id']?>">
                 <div >
                     <pre>
                     <img src="../assets/images/logo2.png" width="60" height="60"><br>
                     <small><b>Muchai Travellers</b></small>
                     <small>P.O BOX 1-00100, Nairobi</small>
                     <small>info@muchaitravellers.org</small>
                     <small>+254789365/+254725485960</small>
                     </pre>
                 </div>
                  
                 <hr>
                <small> <p style="font-weight: bold;">Passenger's Information</p></small>
                     <pre> <small><label for="fullname">Full Name:             <?php echo $row['fullname']?></small></pre>
                     <pre> <small><label for="Phone No">Phone:                 <?php echo $row['phone']?></small></pre>
                     <pre> <small><label for="from">From: <?php echo $row['fromm']?>          <label for="to">To: <?php echo $row['too']?></small></pre>
                     <pre> <small><label for="date">Date: <?php echo $row['date']?>       <label for="fare">Fare(Kshs): <?php echo $row['fare']?></small></pre>
                     <pre> <small><label for="fullname">Seat No:             <?php echo $row['seat']?></small></pre>
                        <hr>
                <small><p style="font-weight:bold">Bus's Information</p></small>
                     <pre> <label for="regno">Bus Reg: <?php echo $row['regno']?>      <label for="driver">Driver's Name: <?php echo $row['driver']?></pre>
                 <hr>
                 <small><pre> Served by:<?php echo  $_SESSION['username'];?></pre></small>
                 <small><pre> Thanks for choosing Muchai Travellers</pre></small>
         </form>  
         </form>  
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
