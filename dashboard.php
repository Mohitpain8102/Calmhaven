<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
  
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
    <link rel="icon" type="image/x-icon" href="image/ch.ico">
    <style>
      *{
        font-family: poppins;
      }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #c3cbdc;
            background-image: linear-gradient(147deg, #c3cbdc 0%, #edf1f4 74%);">
  <div class="container-fluid">
    <a class="navbar-brand mx-5" href="#" style="letter-spacing: 0.1REM;font-weight:600;font-size:25px;">CALMHAVEN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end me-5" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color: blue;" aria-current="page" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Subscription">Subscriptions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appointment.php" data-bs-toggle="tooltip" data-bs-placement="left" title="Appoint..">Appointment</a>
        </li>
        <li class="nav-item me-3">
        <button type="button" onclick="popup()" class="btn btn-outline-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Logout"><i class="bi bi-box-arrow-right"></i></button>
        </li>
        <li class="nav-item me-2">
        <i class="bi bi-person-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Profile" style="font-size: x-large;"></i>
        </li>
        <li class="nav-item  mx-3 me-5 float-end">
         <div  id="live-time" class="d-flex position-absolute" style="font-size: 15px;"></div>
        </li>
       
      </ul>
    </div>
  </div>
</nav>

  <form action="#" method="POST">
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

<!--Fetch data from database for dashboard-->
<?php
include ("connection.php");
$id = $_SESSION['useremail'];
// Write your SQL query
$sql = "SELECT * FROM signupdetails Where email = '$id'";

// Execute the query
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    // Fetch data from each row
    while($row = $result->fetch_assoc()) {
      ?>
    <section class="vh-100" style="background-color: #f4f5f7;">
    <h1 class="text-center py-3">User Dashboard</h1>
        <div class="container py-5 h-50">
          <div class="row d-flex justify-content-center align-items-center h-50">
            <div class="col col-lg-6 mb-4 mb-lg-0">
              <div class="card mb-5" style="border-radius: .5rem;">
                <div class="row g-0">
                  <div class="col-md-4 gradient-custom text-center text-white"
                    style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                    <img src="png/avataaars.svg"
                      alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
                    <h5><?php echo $row['name']; ?></h5>
                    <p><?php echo "ID: " . $row['sno'];?></p>
                   
                    <i class="far fa-edit mb-5"></i>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body p-4">
                      <h6>User Information</h6>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Email</h6>
                          <p class="text-muted"><?php echo $row["email"];?></p>
                        </div>
                        <div class="col-6 mb-3">
                          <h6>Phone</h6>
                          <p class="text-muted"><?php echo $row["phone"];?></p>
                        </div>
                      </div>
                      <h6>Address</h6>
                      <p class="text-muted"><?php echo $row["address"];?></p>
                      <hr class="mt-0 mb-4">
                      <div class="row pt-1">
                        <div class="col-6 mb-3">
                          <h6>Managed By Rohit and Mohit</h6>
                          <p class="text-muted">Thanks for visit Us!</p>
                        </div>
                        <!--<div class="col-6 mb-3">
                          <h6>Most Viewed</h6>
                          <p class="text-muted">Dolor sit amet</p>
                        </div>-->
                      </div>
                      <div class="d-flex justify-content-start">
                        <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                        <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <?php
      // Process the data
       // echo "ID: " . $row["sno"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. $row["phone"]. $row["address"]."<br>";
    }
} else {
    echo "No User found";
}

// Close the connection
$conn->close();
?>
</form>
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
<!--Fetch data from database for dashboard-->
