<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/script.js"></script>
    <link href="css/appoint.css" rel="stylesheet">
   
</head>
<body style="background-color: #36669d;
background-image: linear-gradient(315deg, #36669d 0%, #d3d3d3 74%);
">
    <form action="#" method="post">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <h3 class="navbar-brand mx-5" href="#">Appointment</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto mx-5">
        <li class="nav-item">
          <a class="nav-link me-3" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item me-5">
        <button type="button" onclick="popup()" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout"><i class="bi bi-box-arrow-right"></i></button>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="">
    <div class="container">
    <nav aria-label="breadcrumb ">
  <ol class="breadcrumb mt-2">
    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
  </ol>
</nav>
<span  id="live-time" class=" position-absolute"></span>

        <div class="row">
        <div class="col-md-6 d-flex flex-column order-1 order-lg-1 hero-img ">
          <div class="image-container">
          <img src="image/appointment.png" class="img-fluid animated" alt="">
          </div>
        </div> 
        
        <div class="col-md-6 d-flex flex-column order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                 
                <div class="card mb-5 mt-5"  >
                    <div class="card-header text-center">
                        <h4>Appointment Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                        <div class="col">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="fname" class="form-control form-control-sm" placeholder="Ex-smith">
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label for="">Last Name</label>
                            <input type="text" name="lname" class="form-control form-control-sm" placeholder="Ex-smith">
                        </div>
                        </div>
                        </div>
                         <!--end of first row-->
                        <div class="row mt-2">
                        <div class="col">
                        <div class="form-group">
                            <label for="" >First Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Ex-smith">
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label for="" >First Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Ex-smith">
                        </div>
                        </div>
                        </div>
                        <!--end of second row-->
                        <div class="row mt-2">
                        <div class="col">
                        <div class="form-group">
                            <label for="" class="mb-1">Date:</label>
                            <input type="date" class="form-control form-control-sm" placeholder="Ex-smith">
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label for="" class="mb-1">Time:</label>
                            <input type="time"  class="form-control form-control-sm" placeholder="Ex-smith">
                        </div>
                        </div>
                          <button type="submit" class="btn btn-success mt-3 mx-auto w-50">Submit</button>
                    </div>
                </div>
          </div>
        </div> 
        </div>
    </div>

</section>
</form>
<footer class="text-center bg-body-tertiary">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark">
        <i class="fab fa-linkedin"></i></a>
      <!-- Github -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 -- Made With <span style="color: red;font-size:20px;">&#9829;</span> by ROHIT
    
  </div>
  <!-- Copyright -->
</footer>
<script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
});
function updateTime() {
            // Make an AJAX request to fetch the current server time
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the time display with the fetched time
                    document.getElementById("live-time").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "live_time.php", true);
            xhr.send();
        }
        // Update the time immediately when the page loads
        window.onload = function() {
            updateTime();
            // Update the time every second
            setInterval(updateTime, 1000);
        };
</script>
</body>
</html>
<?php
include ("connection.php");
$userprofile = $_SESSION['useremail'];
if($userprofile == true){

}
else{
  ?>
  <meta http-equiv="refresh" content="0;url=http://localhost/project/index.php" />
  <?php
}
?>
