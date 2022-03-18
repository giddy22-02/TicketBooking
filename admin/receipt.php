<?php
include ('../actions/connect.php');
include 'header.php';
?>
<div class="row my-3">
    <div class="col-md-8">
        <form action="actions/add_admins.php" method="POST" enctype="multipart/form-data" lass="p-3">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="text" class="form-control w-80 m-auto" name="branch" placeholder="Branch"
                            required="required">
                    </div>
                    <div class="mb-3">
                        <input type="file" class="form-control w-80 m-auto" name="photo">
                    </div>
                    <div class="mb-3">
                        <input type="number" class="form-control w-80 m-auto" name="idno" placeholder="ID No"
                            required="required" minlength="10" maxlength="10">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control w-80 m-auto" name="fullname" placeholder="Full Name"
                            required="required">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control w-80 m-auto" name="username" placeholder="Username"
                            required="required">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control w-80 m-auto" name="email" placeholder="Email Address"
                            required="required">
                    </div>
                    <div class="mb-3">
                        <input type="tel" class="form-control w-80 m-auto" name="phone" placeholder="Phone No"
                            required="required">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control w-80 m-auto" name="password" placeholder="Password"
                            required="required">
                    </div>
                </div>
                <div class="modal-footer" style="background:#8c19c2; color: white;">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-success">Save changes</button>
                </div>

            </div>
        </form>
    </div>
    <div class="col-md-4">
        <div class="container">
            <div class="campany-info text-center">
                <img src="../assets/images/logo.png" alt="Company Logo" width="60" height="60">
                <h5>Muchai Travellers</h5>
                <h6>P.O BOX 1-00100</h6>
                <h6>Nairobi</h6>
                <p>info@muchaitravellers.org</p>
                <p>+254789365/+254725485960</p>
            </div>
            <hr>
            <div class="customer-info">
                <h6>Passenger's Information</h6>
                <p>Name:</p>
                <div class="row">
                    <div class="col-md-6">
                       <p>Phone:</p>
                    </div>
                    <div class="col-md-6">
                        <p>Amount:</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <b>From:</b>
                    </div>
                    <div class="col-md-6">
                        <b>To:</b>
                    </div>
                </div>
            </div>
            <hr>
            <div class="car-info">
                <h6>Car Information</h6>
                <div class="row">
                    <div class="col-md-6">
                        <b>Reg No:</b>
                    </div>
                    <div class="col-md-6">
                        <b>Driver:</b>
                    </div>
                </div>
            </div>
            <hr>
            <div class="admin">
                <p>Serverd by:</p>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>