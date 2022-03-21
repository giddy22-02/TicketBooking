
<div class="card my-3 table-responsive">
    <div class="card-header fw-bold" style="background:#8c19c2;">
        <div class="row">
            <div class="col-md-4 text-left text-light">
                <h3>Booking infomation</h3>
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
           
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Full Name</th>
                <th scope="col">Phone</th>
                <th scope="col">From</th>
                <th scope="col">To</th>
                <th scope="col">Reg No</th>
                <th scope="col">Driver</th>
                <th scope="col">Edit</th>
                <th scope="col">Book</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
               require_once('partials/i_passengers.php');
                ?>
        </tbody>
    </table>
</div>
 <script>
            function myPrint(receipt) {
                var printdata = document.getElementById(receipt);
                newwin = window.open("");
                newwin.document.write(printdata.outerHTML);
                newwin.print();
                newwin.close();
            }
        </script>