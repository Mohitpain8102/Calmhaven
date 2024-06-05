<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="image/ch.ico">
    <script src="js/index.js"></script>
    <style>
        *{
            font-family: poppins;
        }
        body{
            background-image: url('png/adminback.png') /*linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%)*/;
           height: 90vh;
           background-size: cover;
           background-position: center;
           
         }
    </style>
</head>
<body>
    <form action="#" method="post">
    <nav class="navbar bg-light">
        <div class="container">
        <div class="navbar-brand fw-bold" style="text-transform: uppercase;letter-spacing:0.1em;">
            Admin Login
        </div>
        </div>
    </nav>
    <div class="container">
        <div class="row ">
            <div class="col-md-4  mx-auto mt-5 mb-5">
                <div class="card">
                    <div class="card-header fw-bold text-center" style="font-size: 20px;">
                        Admin
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <div class="input-group">
                                <input type="text" name="adminuser" placeholder="Example@gmail.com" class="form-control form-control-sm" >
                                <div class="input-group-text"><i class="fa-duotone fa-user-tie-hair"></i></div>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="">Password</label>
                            <div class="input-group">
                                <input type="password" id="password" name="adminpass" placeholder="*****" class="form-control form-control-sm" >
                                <span class="input-group-text " style="cursor: pointer;">
                               <img src="png/eyeopen.png" onclick="showpassword()"  height="20" width="20" id="toggleicon" alt="">
                     </span>
                            </div>
                        </div>
                        <div class="form-group mt-3 text-center">
                            <input type="submit" value="Submit" name="btn" class="btn btn-success">
                        </div>
                        <hr class="divider">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <footer class="footer fixed-bottom" style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);">
            <div class="footer-label px-3">
                <span class="text-muted"><i class="far fa-copyright"></i>All Rights Reserved<p class="text-center">
                    <i class="fas fa-registered"></i> Made With <span style="color: red;font-size: 20px;">&#9829;</span> by Rohit and Mohit</p>
                </span>
            <div class="link text-center">
                <a href="" style="color: blue;"><i class="fab fa-facebook me-2" style="font-size:21px;"></i></a>
                <a href="" style="color: red;"><i class="fab fa-google-plus-g me-2" style="font-size:21px;"></i></a>
                <a href="" style="color: #000000;"><i class="fab fa-github" style="font-size:21px;"></i></a>
            </div>
        </div>
        </footer>
</body>
</html>
<?php
include ('connection.php');
if(isset($_POST['btn'])){
$admin = $_POST['adminuser'];
$adminpass = $_POST['adminpass'];
$query = "SELECT * FROM admin WHERE admin = '$admin' && password = '$adminpass' ";
$data = mysqli_query($conn,$query);
$row = mysqli_num_rows($data);
if($row == 1){
    $_SESSION['admin_name'] = $admin;
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/project/fetch.php" />
    <?php
}
else{
     echo '<script>Swal.fire({
        position: "middle",
        icon: "warning",
        title: "Invalid Admin-User OR Password", 
        showConfirmButton: false,
        timer: 1500
      })</script>';
     }
}
?>