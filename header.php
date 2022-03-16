<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap File-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="sytle.css">
</head>

<body>
    <nav class="navbar navbar-light bg-light p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a class="navbar-brand" href="#">
                Simple Dashboard
            </a>
            <button class="navbar-toggler d-md-none collapsed mb-3" type="button" data-toggle="collapse"
                data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="col-12 col-md-4 col-lg-2">
            <input class="form-control form-control-dark" type="text" placeholder="Search" aria-label="Search">
        </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
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
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-md-5">
                    <ul class="nav flex-column">
                       <!--Positions-->
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#positions" role="button"
                            aria-expanded="false" aria-controls="collapseExample">
                            <span class=" text-info me-2"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
                            <i class="fa-solid fa-user-group-crown"></i>
                            <span  class="text-dark">Positions</span>
                            <span class=" text-info right-icon ms-auto">
                                <i class="bi bi-chevron-down"></i>
                            </span>
                        </a>
                        <div class="collapse" id="positions">
                            <div>
                                <ul class="navbar-nav ps-3">
                                    <li>
                                        <a href="president.php" class="nav-link px-3">
                                            <span class=" text-light me-2"><i class="bi bi-person-check-fill"></i></span>
                                            <span class="text-info">President</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="secretary.php" class="nav-link px-3">
                                            <span class=" text-light me-2"><i class="bi bi-person-check-fill"></i></span>
                                            <span class="text-info">Secretary General</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="treasurer.php" class="nav-link px-3">
                                            <span class="text-light me-2"><i class="bi bi-person-check-fill"></i></span>
                                            <span class="text-info">Treasurer</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi-bag" style="font-size: 2rem; color: cornflowerblue;"></i>
                                <span class="ml-2">Orders</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi-bag" style="font-size: 2rem; color: cornflowerblue;"></i>
                                <span class="ml-2">Products</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi-bag" style="font-size: 2rem; color: cornflowerblue;"></i>
                                <span class="ml-2">Customers</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi-bag" style="font-size: 2rem; color: cornflowerblue;"></i>
                                <span class="ml-2">Reports</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi-bag" style="font-size: 2rem; color: cornflowerblue;"></i>
                                <span class="ml-2">Integrations</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </nav>