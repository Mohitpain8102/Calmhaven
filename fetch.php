<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin window</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.bootstrap5.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="image/ch.ico">
    <script src="js/fetch.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
        *{
            font-family: poppins;
        }
        a{
            text-decoration: none;
            color: black;
        }
        body{
          background-color: #f9fcff;
          background-image: linear-gradient(147deg, #f9fcff 0%, #dee4ea 74%);
          background-repeat: no-repeat;
          height: 100%;
          background-size: cover;
          background-position: center;
        }
        ::-webkit-scrollbar{
          display: none;
        }
        .sidenav {
          height: 100%;
          width: 0;
          position: fixed;
          z-index: 1;
          top: 2;
          left: 0;
          background-color: white;
          overflow-x: hidden;
          transition: 0.5s;
          padding-top: 60px;
  
}

.sidenav .alink {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
  transition: 0.3s;
}

.sidenav .alink:hover {
    background-color: grey;
    border-radius: 3px;
    color: white;
}

.sidenav .btn-close {
  position: absolute;
  top: 25px;
  right: 25px;
  font-size: 20px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav .alink {font-size: 18px;}
}
.bar-conatiner{
    cursor: pointer;
}
.bars{
  width: 25px;
  height: 3px;
  background-color: black;
  margin: 6px 0;
}
.fa-regular:hover{
    transition: 0.5seconds;
    color: red;
}

    </style>
</head>
<body>
  <form action="#" method="post" enctype="multipart/form-data" >
     <nav class="navbar bg-light">
        <div class="container">
        <i class="bi bi-list fw-bold" style="font-size: 25px;cursor:pointer;" onclick="openNav()"></i>
         <div class="navbar-brand me-auto mx-3">
          Admin Dashboard
        </div>
    <div class="navbar-link mx-1">
        <a href="" class="nav-item me-3">Home</a>
        <a href="" class="nav-item me-3">Login</a>
        <span  id="live-time" class="me-3 fixed"></span>
        <button type="button" onclick="popup()"  class="btn btn-danger"><i class="bi bi-box-arrow-right"></i></button>
       
    </div>
    </div>
</nav>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="btn-close" onclick="closeNav()"></a>
  <a href="#" class="alink">Home</a>
  <a href="#"class="alink">Services</a>
  <a href="#"class="alink">Clients</a>
  <a href="#"class="alink">Contact</a>
</div>
<div id="main">
<div class="container-fluid">
    <div class="row mt-3 ">
      <div class="col mb-3">
        <div class="card mb-5">
          <div class="card-header text-center fw-bold" style="font-size: 20px;letter-spacing:0.1em;text-transform:uppercase;">
            Users Details
          </div>
          <div class="card-body">
            <div class="button d-flex justify-content-end"> 
           <!-- <span class="select me-auto">Show result: <select name="" id="select">
              <option value="25">25</option>
              <option value="25">100</option>
              <option value="25">125</option>
            </select></span>--> 
              <button type="button" class="btn btn-outline-primary " data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-regular fa-user-plus"></i> Add Member</button>
            </div>
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header fw-bold">
                  <span><i class="fa-regular fa-user-plus"></i> Add More Users
                  </div></span>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="" class="mb-1">Username:</label>
                      <div class="input-group">
                        <input type="text" name="email" class="form-control form-control-sm" required placeholder="Example@gmail.com">
                        <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                      <label for="" class="mb-1">Contact:</label>
                      <div class="input-group">
                        <input type="text"  name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" class="form-control form-control-sm" required placeholder="+91">
                        <div class="input-group-text"><i class="fa-duotone fa-phone-rotary"></i></div>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                      <label for="" class="mb-1">Password:</label>
                      <div class="input-group">
                        <input type="password"  name="password" id="password" class="form-control form-control-sm" required placeholder="4/8 Digits">
                        <span class="input-group-text " style="cursor: pointer;">
                        <img src="png/eyeopen.png" onclick="showpassword()"  height="20" width="20" id="toggleicon" alt="">
                     </span>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            <hr class="divider">
            <?php
              error_reporting(0);
               include('connection.php');
              $query = "SELECT * FROM signupdetails";
              $data = mysqli_query($conn,$query);
              $total = mysqli_num_rows($data);
              if($total !=0){
              ?>
            <div class="table-responsive">
            <table id="example" class="table table-striped table-hover text-center" >
            <thead>
              <th>S.no</th>
              <th>Name/th>
              <th>Email</th>
              <th>Contact</th>
              <th>Password</th>
              <th>Correction</th>
            </thead>
            <?php
            while($result = mysqli_fetch_assoc($data)){
             echo "<tr>
              <td>$result[sno]</td>
              <td>$result[name]</td>
              <td>$result[email]</td>
              <td>$result[phone]</td>
              <td>$result[password]</td>
              <td><a href='update.php?' class='btn btn-warning btn-sm ' data-bs-toggle='modal' data-bs-target='#secondModal'>Update</a>
              <a href='delete.php?sno=$result[sno]' onclick='return deleteFeild()' class='btn btn-danger btn-sm '>Delete</a></td>
              </tr>";
            }
          }
         ?>
           </table>
           </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header fw-bold text-center" style="font-size: 20px;letter-spacing:0.1em;text-transform:uppercase;">
            Statistics
          </div>
          <div class="card-body">
            <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<footer class="footer d-flex flex-column fixed-bottom" 
        style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);">
            <div class="footer-label">
                <center class="text-muted">
                    <i class="fas fa-registered"></i> Made With <span style="color: red;font-size: 20px;">&#9829;</span> by Rohit</p>
               </center>
            <div class="link text-center">
                <a href="" style="color: blue;"><i class="fab fa-facebook me-2" style="font-size:21px;"></i></a>
                <a href="" style="color: red;"><i class="fab fa-google-plus-g me-2" style="font-size:21px;"></i></a>
                <a href="" style="color: #000000;"><i class="fab fa-github" style="font-size:21px;"></i></a>
            </div>
        </div>
        </footer>
<script src="js/fetch.js"></script>
<script>
    new DataTable('#example');
    //live time show
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
    //chart
          var xValues = ["USers", "Admin", "Doctors", "Appointment", "Emergency"];
          var yValues = [55, 49, 44, 24, 15];
          var barColors = [
          "#1e7145",
          "#00aba9",
          "#2b5797",
          "#e8c3b9",
          "#b91d47"
          ];

         new Chart("myChart", {
         type: "pie",
         data: {
         labels: xValues,
         datasets: [{
         backgroundColor: barColors,
         data: yValues
        }]
         },
         options: {
         title: {
         display: true,
         text: "Show Visits Via Chart"
    }
  }
});
function deleteFeild(){
   confirm('Are you sure to delete?');
}
    </script>
    </form>
    <form action="#" method="post">
    <div class="modal fade" id="secondModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header fw-bold">
                  <span><i class="fa-regular fa-user-plus"></i> Add More Users
                  </div></span>
                  <div class="modal-body">
                    <div class="form-group">
                      <label for="" class="mb-1">Username:</label>
                      <div class="input-group">
                        <input type="text" name="email" class="form-control form-control-sm" required placeholder="Example@gmail.com">
                        <div class="input-group-text"><i class="fa-solid fa-user"></i></div>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                      <label for="" class="mb-1">Contact:</label>
                      <div class="input-group">
                        <input type="text"  name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" class="form-control form-control-sm" required placeholder="+91">
                        <div class="input-group-text"><i class="fa-duotone fa-phone-rotary"></i></div>
                      </div>
                    </div>
                    <div class="form-group mt-2">
                      <label for="" class="mb-1">Password:</label>
                      <div class="input-group">
                        <input type="password"  name="password" id="password" class="form-control form-control-sm" required placeholder="4/8 Digits">
                        <span class="input-group-text " style="cursor: pointer;">
                        <img src="png/eyeopen.png" onclick="showpassword()"  height="20" width="20" id="toggleicon" alt="">
                     </span>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" name="update" class="btn btn-success">update</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
</body>
</html>
<?php
include('connection.php');
if (isset($_POST['submit']))
{
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $query = "INSERT INTO signupdetails VALUES('$sno','$email','$phone','$password')";
  $insert = mysqli_query($conn,$query);
  if ($insert){
    echo "<script>alert('Record Saved successfully');</script>"
    ?>
  <meta http-equiv="refresh" content="0;url=http://localhost/project/fetch.php" />
    <?php
  }
  else{
        echo "<script>alert('Record Not Save!');</script>";
  }
}
?>
<?php
error_reporting(0);
include('connection.php');
$userprofile =  $_SESSION['admin_name'];
if($userprofile == true){
  //do nothing
}
  else{
  ?>
  <meta http-equiv="refresh" content="0;url=http://localhost/project/adminlogin.php" />
  <?php
}
?>
<?php
    include("connection.php");
    

?>