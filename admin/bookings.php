<?php
include ('../actions/connect.php');
include 'header.php';
?>
<div class="row my-3 p-3">
    <div class="col-md-8 p-2">
        <form action="actions/add_bookings.php" method="POST" enctype="multipart/form-data" lass="p-3">
            <div class="modal-content">
                <div class="modal-body">
                    <h5>Booking</h5>
                    <h6>Passenger's infomation</h6>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                 <label for="fullname">Full Name</label>
                            </div>
                            <div class="col-md-6">
                                 <input type="text" class="form-control w-80 m-auto" name="fullname"
                                     placeholder="Full Name" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="phone">Phone No</label>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control w-80 m-auto" name="phone"
                                    placeholder="Phone No" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="route">Route</label>
                            </div>
                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-2">
                                        <label for="route">From</label>
                                    </div>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control w-80 m-auto" name="fromm"
                                    value="<?php echo  $_SESSION['branch'];?>" required="required">
                                    </div>
                                </div>
                                
                            </div>
                             <div class="col-md-3">
                                 <div class="row">
                                     <div class="col-md-2">
                                           <label for="route">To</label>
                                     </div>
                                     <div class="col-md-10">
                                          <select name="too" class="form-control w-80 m-auto">
                                               <option>--Select--</option>
                                               <option value="Nyeri">Nyeri</option>
                                               <option value="Nairobi">Nairobi</option>
                                               <option value="Mombasa">Mombasa</option>
                                               <option value="Nakuru">Nakuru</option>
                                               <option value="Eldoret">Eldoret</option>
                                                <option value="Kisumu">Kisumu</option>
                                            </select>
                                     </div>
                                 </div>
                                
                             </div>
                        </div>
                    </div>
                      <div class="mb-3">
                          <div class="row">
                              <div class="col-md-4">
                                  <label for="date">Date</label>
                              </div>
                              <div class="col-md-6">
                                  <input type="date" class="form-control w-80 m-auto" name="date"
                                      required="required">
                              </div>
                          </div>
                      </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="fare">Fare(Kshs)</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="number" class="form-control w-80 m-auto" name="fare"
                                        placeholder="Amount(Kshs) e.g 1000" required="required">
                                </div>
                            </div>
                        </div>
                        <h6>Bus's Information</h6>
                          <div class="mb-3">
                              <div class="row">
                                  <div class="col-md-4">
                                      <label for="regno">Reg No</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="tel" class="form-control w-80 m-auto" name="regno"
                                          placeholder="Bus Reg No e.g KDD 105 T" required="required">
                                  </div>
                              </div>
                          </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="driver">Driver's Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control w-80 m-auto" name="driver"
                                            placeholder="Driver's Name e.g James" required="required">
                                    </div>
                                </div>
                            </div>
                             <div class="mb-3">
                                 <input type="text" class="form-control w-80 m-auto" name="admin"
                                     value="<?php echo  $_SESSION['username'];?>" required="required">
                             </div>

                </div>
                <div class="modal-footer" style="background:#8c19c2; color: white;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success">Save changes</button>
                </div>

            </div>
        </form>
    </div>
    <div class="col-md-4 p-2">
        <p><input type="button" class="btn btn-secondary" onclick="myPrint('receipt')" value="Print Receipt"></p>
        <div class="container" id="receipt">
            <fieldset">
            <pre>
                       <img src="../assets/images/logo2.png" width="60" height="60">
                    <small>Muchai Travellers</small>
                    <small>P.O BOX 1-00100, Nairobi</small>
                    <small>info@muchaitravellers.org</small>
                   <small>+254789365/+254725485960</small>
<hr class="receipt">
<small><b>Passenger's Information</b></small>
<small>Name:</small>                             <small>Phone:</small>
<small>From:</small>                             <small>To:</small>
<small>Date:</small>                             <small>Amount:</small>
<small><b>Car's Information</b></small>
<small>Bus Reg No:</small>                       <small>Driver:</small>
<small>Serverd by:</small>
<hr class="receipt">
<small>Thank you for Choosing Muchai Travellers</small><br>
<small>Always Welcome</small>
                </pre>
            </fieldset>
        </div>
        <!--Js-->
        <script>
            function myPrint(receipt) {
                var printdata = document.getElementById(receipt);
                newwin = window.open("");
                newwin.document.write(printdata.outerHTML);
                newwin.print();
                newwin.close();
            }
        </script>
    </div>
</div>
<?php
include 'passengers.php';
?>
<?php
include 'footer.php';
?>