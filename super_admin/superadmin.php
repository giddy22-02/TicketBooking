<!--Header Section-->
<?php
include ('../actions/connect.php');
include 'header.php';

?>
<div class="card my-3 table-responsive">
    <div class="card-header fw-bold" style="background:#8c19c2;">
        <div class="row">
            <div class="col-md-4 text-left text-light">
                <h3>Admins</h3>
            </div>
            <div class="col-md-4 text-center">

            </div>
            <div class="col-md-4 text-center">
                <!-- Modal  For Adding New Candidates-->
                <form action="actions/add_sadmins.php" method="POST" enctype="multipart/form-data" lass="p-3">
                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background:#8c19c2; color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add superadmin</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="email" class="form-control w-80 m-auto" name="email"
                                            placeholder="Email Address" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="username"
                                            placeholder="Username" required="required">
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
                        </div>
                    </div>
                </form>
                <!--Add New admins Button-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light my-3" data-toggle="modal" data-target="#addnew"
                    style="color:#8c19c2">
                    <i class="bi bi-person-plus"></i> Add New
                </button>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Branch</th>
                <th scope="col">Photo</th>
                <th scope="col">ID No</th>
                <th scope="col">Full Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Phone No</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
               require_once('partials/i_admins.php');
                ?>
        </tbody>
    </table>
</div>
<!--Footer Section-->
<?php
include 'footer.php';
?>