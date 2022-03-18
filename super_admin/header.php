<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!--Bootstrap File-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <!-- font-awesome icon -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
</head>

<body>
    <nav class="navbar navbar-light p-3" style="background:#8c19c2">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <!---Logo------------------------->
            <img src="../assets/images/logo.png" alt="logo" width="60" height="60">
            <!---Logo------------------------->
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse"
                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
        <!--
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-expanded="false">
                    Hello, John Doe
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Messages</a></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
-->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!--====Sidebar=====Start=======================-->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background:#8c19c2">
                <div class="position-sticky pt-md-5">
                    <hr class="text-light">
                    <h3 class="p-3 text-light">Admin</h3>
                    <hr class="text-light">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admins.php">
                                <i class="fa fa-user" style="font-size: 2rem; color: white;"></i>
                                <span class=" text-light ml-2"> Admins</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-bus" style="font-size: 2rem; color: white;"></i>
                                <span class=" text-light ml-2"> Buses</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="routes.php">
                                <i class="fa fa-road" style="font-size: 2rem; color:  white;"></i>
                                <span class=" text-light ml-2">Routes</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fa fa-users" style="font-size: 2rem; color:  white;"></i>
                                <span class=" text-light ml-2">Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="drivers.php">
                                <i class="bi bi-people" style="font-size: 2rem; color:  white;"></i>
                                <span class=" text-light ml-2">Drivers</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <!--========Sidebar========= Ends===================-->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Overview</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <div class="row">
                    <!--====Card 1- Total No of Admins===-->
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 rounded" style="background: #8c19c2; font-weight: 600;">
                            <div class="card-header text-light fw-bold">
                                Admins
                            </div>
                            <div class="card-body bg-light" style="color: #8c19c2; font-weight: 600;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>
                                            <i class="fa fa-user" style="font-size: 2.5rem;"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                         $query ="SELECT  id FROM admins ORDER BY id";
                                         $query_run =mysqli_query($con, $query);
                                         $row = mysqli_num_rows($query_run);
                                         echo '<h2>'.$row.'</h2>';
                                         ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--====Card 1- Total No of Admins===-->
                    <!--====Card 2- Buses===-->
                    <div class="col-md-3 mb-3">
                        <div class="card  h-100 rounded" style="background: #8c19c2; font-weight: 600;">
                            <div class="card-header text-light fw-bold">
                                Buses
                            </div>
                            <div class="card-body bg-light" style="color: #8c19c2; font-weight: 600;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>
                                            <i class="fa fa-bus" style="font-size: 2.5rem;"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                    //$query ="SELECT  id FROM voters ORDER BY id";
                                    //$query_run =mysqli_query($con, $query);
                                    //$row = mysqli_num_rows($query_run);
                                    //echo '<h2>'.$row.'</h2>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====Card 2- Buses===-->
                    <!--====Card 3- Customers===-->
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 rounded" style="background: #8c19c2; font-weight: 600;">
                            <div class="card-header text-light fw-bold">
                                Customers
                            </div>
                            <div class="card-body bg-light" style="color: #8c19c2; font-weight: 600;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>
                                            <i class="fa fa-users" style="font-size: 2.5rem;"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                    //$query ="SELECT  id FROM voters ORDER BY id";
                                    //$query_run =mysqli_query($con, $query);
                                    //$row = mysqli_num_rows($query_run);
                                    //echo '<h2>'.$row.'</h2>';
                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====Card 3- Customers===-->
                    <!--====Card 4- Drivers===-->
                    <div class="col-md-3 mb-3">
                        <div class="card h-100 rounded" style="background: #8c19c2; font-weight: 600;">
                            <div class="card-header text-light fw-bold">
                                Drivers
                            </div>
                            <div class="card-body bg-light" style="color: #8c19c2; font-weight: 600;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span>
                                            <i class="bi bi-people" style="font-size: 2.5rem;"></i>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        $query ="SELECT  id FROM drivers ORDER BY id";
                                        $query_run =mysqli_query($con, $query);
                                        $row = mysqli_num_rows($query_run);
                                        echo '<h2>'.$row.'</h2>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--====Card 4- Drivers===-->
                </div>