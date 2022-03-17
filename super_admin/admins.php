<!--Header Section-->
<?php
include 'header.php';
?>
<div class="card my-3 table-responsive">
    <div class="card-header fw-bold" style="background:#8c19c2">
        <div class="row">
            <div class="col-md-4 text-left text-light">
                <h3>Admins</h3>
            </div>
            <div class="col-md-4 text-center">

            </div>
            <div class="col-md-4 text-center">
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
               //require_once('partials/i_candidates.php');
                ?>
        </tbody>
    </table>
</div>
<!--Footer Section-->
<?php
include 'footer.php';
?>