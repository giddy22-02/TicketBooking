<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Page Title-->
    <title>SuperAdmin-Login</title>
    <!--Bootstrap File-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!--Custom CSS file-->
    <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
    <!--Login Container Start-->
    <div class="container text-center">
        <!--Form Start-->
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight:800;">Super Admin-Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group d-flex justify-content-center">
                <button name="submit" class="btn btn-info">Login</button>
            </div>
        </form>
        <!--Form End-->
    </div>
    <!--Login Container Ends-->
</body>
</html>