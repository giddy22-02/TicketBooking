<!--Header Section-->
<?php
include ('../actions/connect.php');
include 'header.php';
?>
<div class="card my-3 table-responsive">
    <div class="card-header fw-bold" style="background:#8c19c2;">
        <div class="row">
            <div class="col-md-4 text-left text-light">
                <h3>Routes</h3>
            </div>
            <div class="col-md-4 text-center">
                <!--Notification Message upon submission-->
                <?php
                if(isset($_SESSION['status']))
                {?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">   
                        </button>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }?>
                <!--Notification Message upon submission-->
            </div>
            <div class="col-md-4 text-center">
                <!-- Modal  For Adding New Candidates-->
                <form action="actions/add_route.php" method="POST" enctype="multipart/form-data" lass="p-3">
                    <div class="modal fade" id="addnew" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background:#8c19c2; color: white;">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Add Route</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="fromm"
                                            placeholder="From" required="required">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control w-80 m-auto" name="too"
                                            placeholder="To" required="required">
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
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
               require_once('partials/i_routes.php');
                ?>
        </tbody>
    </table>
</div>
<!--Footer Section-->
<?php
include 'footer.php';
?>