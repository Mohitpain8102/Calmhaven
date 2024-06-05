<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <script src="js/index.js"></script>
    <link rel="icon" type="image/x-icon" href="image/ch.ico">
</head>
<body>
    <form action="#" method="post" autocomplete="off">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar mx-5 ">
            <h4 style="text-transform: uppercase;letter-spacing: 0.01em;">CALMHAVEN</h4>   
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown">
         <ul class="navbar-nav ms-auto">
        <li class="nav-item me-2">
        <button class="btn btn-outline-primary " type="button"  data-bs-toggle="modal" data-bs-target="#myModal" >Sign Up</button>
        </li>
        <li class="nav-item me-2">
        <a href="adminlogin.php" class="btn btn-outline-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin Portal">
          Admin
       </a>
        </li>
        <li class="nav-item me-5">
        <a href="#" class="btn btn-outline-warning " data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ask For any Problem!">Contact US</a>
        </li>
        </li>
      </ul>
    </div>
            <!--User Register model-->
        <div class="modal fade" id="myModal">
         <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
           <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title ">Register</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
             <!-- Modal body -->
             <div class="modal-body">
             <div class="form-group">
              <label for="">Email:</label>
              <div class="input-group mt-1">
              <input type="email" name="email" placeholder="Example@gmail.com" class="form-control form-control-sm " required>
              <div class="input-group-text"><i class="fa-duotone fa-user"></i></div>
              </div>
             </div>
             <div class="form-group">
              <label for="">Name:</label>
              <div class="input-group mt-1">
              <input type="text" name="user" placeholder="Smith" class="form-control form-control-sm " required>
              <div class="input-group-text"><i class="fa-duotone fa-user"></i></div>
              </div>
             </div>
             <div class="form-group">
              <label for="">contact:</label>
              <div class="input-group mt-1">
              <input type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" placeholder="+91" class="form-control form-control-sm " required>
              <div class="input-group-text"><i class="fa-light fa-id-badge"></i></div>
             </div>
             </div>
             <div class="form-group">
              <label for="">Address:</label>
              <div class="input-group mt-1">
                <textarea name="address" cols='55' placeholder="sec/vill/city/country" rows="1" class="form-control form-control-sm " required></textarea>
              <div class="input-group-text"><i class="fa-light fa-id-card"></i></div>
             </div>
             </div>
             <div class="form-group">
              <label for="">Password:</label>
              <div class="input-group mt-1">
              <input type="password" name="pass" placeholder="4/8 Digits" id="password"  class="form-control form-control-sm " required>
              <span class="input-group-text " style="cursor: pointer;">
                    <img src="png/eyeopen.png" onclick="showpassword()"  height="20" width="20" id="toggleicon" alt="">
                     </span>
             </div>
             </div>
             <div class="form-group mt-2">
             <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
             <label class="form-check-label" for="flexSwitchCheckDefault">Agree To continue!</label>
              </div>
             </div>
            </div>
                <!-- Modal footer -->
                     <div class="modal-footer">
                     <button type="submit" class="btn btn-success" name="button1">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                   </div>
                </div>
              </div>
           </div>
    </nav>
    </form>
    <form  action="#" method="post" autocomplete="off">
    <section class="">
        <div class="container h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h2 class="label   ms-5 mt-2 fw-bold" style="font-family: poppins;text-transform:uppercase;">Manage Your Stress</h2>
              <img src="png/1.png" height="450" width="450"
                class="img-fluid" alt="Sample image" style="margin-top: -15px;">
            </div>
            <div class="col-md-7 col-lg-7 col-xl-5 offset-lg-1">
                <div class="card px-4 mt-3 mb-3 mx-auto w-custom" >
                <div class="divider align-items-center my-4">
                  <h3 class="text-center fw-bold mx-3 mb-0">SIGN IN</h3>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <div class="input-group">
                  <input type="email" id="username" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" name="username" required/>
                    <span class="input-group-text " >
                      <i class="fas fa-user" style="font-size: 20px;"></i>
                    </span>
                </div>
                  <label class="form-label mt-1" for="form3Example3">Email address</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-1">
                <div class="input-group">
              <input type="password" name="password" id="passwordFeild" placeholder="******" class="form-control " required>
              <span class="input-group-text " style="cursor: pointer;">
                    <img src="png/eyeopen.png" onclick="showPassword()"  height="20" width="20" id="imageIcon" alt="">
                     </i></span>
             </div>
                  <label class="form-label  mt-1" >Password</label>
                </div>        
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" id="check" />
                   <label for="">Remember me</label>
                  </div>
                  <form action="forgotpassword.php" method="post">
                  <a href="#" name="send-reset-link" class="btn btn-link" style="text-decoration-line: none;">Forgot Password?</a>
                  </form>
                  <!--<a href="#!" class="btn btn-link" style="text-decoration-line: none;">Forgot password?</a>-->
                </div>
                <div class="text-center text-lg-start mt-1 pt-1 mb-2">
                 <center>
                    <input type="submit" class="btn btn-outline-success w-100" name="btn1" >
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an Account? &nbsp;
                    <a href="#!" data-bs-toggle="modal" data-bs-target="#myModal" class="link-danger"style="text-decoration-line:none;">Register</a></p>
                    </center>
                </div>
                <small class="text-center fw-bold">or</small>
                <div>
                    <center>
                    <p class="lead fw-normal mb-0 ">Sign in with</p>
                    <div class="link mt-2 mb-3">
                    <button type="button" class="btn btn-primary  mx-1 "  style="border-radius: 100%;box-shadow: 0px 4px 5px navy;">
                      <i class="fab fa-facebook"></i>
                  </button>
        
                    <button type="button" class="btn btn-primary   mx-1" style="border-radius: 100%;box-shadow: 0px 4px 5px navy;">
                      <i class="fab fa-twitter"></i>
                    </button>
        
                    <button type="button" class="btn btn-primary mx-1"  style="border-radius: 100%;box-shadow: 0px 4px 5px navy;">
                      <i class="fab fa-linkedin"></i>
                    </button>
                </div>
            </center>
                  </div>
            </div>
              </form>
            </div>
          </div>
        </div>
        <footer class="footer mt-2" style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);">
            <div class="footer-label px-3">
                <span class="text-muted"><i class="far fa-copyright"></i>All Rights Reserved<p class="text-center">
                    <i class="fas fa-registered"></i> Made With <span style="color: red;font-size: 20px;">&#9829;</span> by Rohit</p>
                </span>
            <div class="link text-center">
                <a href="" style="color: blue;"><i class="fab fa-facebook me-2" style="font-size:21px;"></i></a>
                <a href="" style="color: red;"><i class="fab fa-google-plus-g me-2" style="font-size:21px;"></i></a>
                <a href="" style="color: #000000;"><i class="fab fa-github" style="font-size:21px;"></i></a>
            </div>
        </div>
        </footer>
      </section>
      <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
        });
      </script>
</body>
</html>
<?php
error_reporting(0);
include ('connection.php');
if (isset($_POST['button1'])){
  $username = $_POST['email'];
  $name = $_POST['user'];
  $phone = $_POST['phone'];
  $useraddress = $_POST['address'];
  $password = $_POST['pass'];
  $checkUser = "SELECT * FROM signupdetails WHERE email = '$username' AND phone = '$phone' ";
  $result = mysqli_query($conn, $checkUser);
  $count = mysqli_num_rows($result);
  if ($count>0){
    echo '<script>Swal.fire({
      position: "middle",
      icon: "warning",
      title: "User Already Registered &#33;", 
      text: "Please Login",
      showConfirmButton: false,
      timer: 1500
    })</script>';
  }
  else{
    $data = "INSERT INTO signupdetails VALUES ('$sno','$name', '$username', '$phone','$useraddress', '$password')";
    if($conn->query($data)){
      echo '<script>Swal.fire({
        position: "middle",
        icon: "success",
        title: "Registered Successfully", 
        showConfirmButton: false,
        timer: 1500
      })</script>';
    }
    else{
      echo '<script>Swal.fire({
        position: "middle",
        icon: "danger",
        title: "Oops! Something went wrong &#33;", 
        showConfirmButton: false,
        timer: 1500
      })</script>';
    }
  }
}
else {
  
}
?>
<!--login authentication-->
<?php
include('connection.php');
if (isset($_POST['btn1'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM signupdetails WHERE email = '$username' && password = '$password' ";
   $data = mysqli_query($conn, $query);
   $total = mysqli_num_rows($data);
   if($total == 1) {
    $_SESSION['useremail'] = $username;
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/project/dashboard.php"/>
    <?php
   }
   else{
    echo '<script>Swal.fire({
      position: "middle",
      icon: "warning",
      title: "Invalid Username OR Password", 
      showConfirmButton: false,
      timer: 1500
    })</script>';
   }
}
?>
