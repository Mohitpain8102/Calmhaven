<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/gh/eliyantosarage/font-awesome-pro@main/fontawesome-pro-6.5.1-web/css/all.min.css" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src="js/index.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-7Hekw47ULp+vtQ28dygKyQnUHhxLq2iSJ83KX7txjGjUV+fJHZo2Rv4Rl5B/nf4xv4fZx4bFJlH7lDMr+zYbqw==" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="image/ch.ico">
   
</head>
<body>
<nav class="navbar navbar-expand-md navbar-light" style="background-color: #c3cbdc;
            background-image: linear-gradient(147deg, #c3cbdc 0%, #edf1f4 74%);" >
  <div class="container-fluid">
    <h3 class="brand mx-5">CalmHaven</h3>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto me-5 mx-5 px-2 fw-normal">
        <li class="nav-item">
          <a class="nav-link fw-bold " style="color: #3c8ce7;" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#team">Our Team</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-raised-hand"></i> Consultancy</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-person-check-fill"></i> Meet With DOC</a></li>
            <li><a class="dropdown-item" href="appointment.php"><i class="bi bi-calendar2-check"></i> Appointment</a></li>
          </ul>
        </li>
        <!--<li class="nav-item">
        <a type="button" class="nav-link" id="get-started-btn2" >About</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link" type="button"  data-bs-toggle="modal" data-bs-target="#myModal">Contact us</a>
        </li>
        <div class="modal fade" id="myModal">
         <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
           <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title">Contact US</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
             <!-- Modal body -->
             <div class="modal-body text-center">
             <p class="title fw-normal" style="font-size: 17px;">Gmail: xyz@gmail.com</p>
              <p class="title fw-normal" style="font-size: 17px;">phone: 123456789</p>
             <p class="title fw-normal" style="font-size: 17px;">Address: Dehradun,Uttarakhand</p>
              <hr>
               &copy;2024 Made With <span style="color: red;font-size:20px;">	&#9829;</span> By ROHIT
            </div>
                <!-- Modal footer -->
                     <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                   </div>
                </div>
              </div>
           </div>
        <form class="d-flex" action="#" method="POST">
        <div class="input-group me-2">
                <input class="form-control border-end-0 border rounded-pill" type="search" placeholder="search" id="example-search-input">
                <span class="input-group-append">
                    <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                    <i class="bi bi-search"></i>
                    </button>
                </span>
            </div>
       <!-- <input class="form-control me-2 form-control-sm" type="search" placeholder="Search" aria-label="Search">-->
        <button type="button"  class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#modelLogin">Login</button>
        <button type="button"  class="btn btn-outline-success btn-sm me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Signup</button>
        <li class="nav-item">
          <a class="nav-link " href="adminlogin.php" type="button"  data-bs-toggle="tooltip" data-bs-placement="bottom" title="Admin Login"  ><i class="bi bi-person-fill" style="font-size: 15px;"></i></a>
        </li>
            <!--User Register model-->
         <div class="modal fade" id="exampleModal">
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
              <div class="input-group-text"><i class="bi bi-envelope-at-fill" style="font-size: 18px;"></i></div>
              </div>
             </div>
             <div class="form-group">
              <label for="">Name:</label>
              <div class="input-group mt-1">
              <input type="text" name="user" placeholder="Smith" class="form-control form-control-sm " required>
              <div class="input-group-text"><i class="bi bi-person-fill" style="font-size: 18px;" ></i></div>
              </div>
             </div>
             <div class="form-group">
              <label for="">contact:</label>
              <div class="input-group mt-1">
              <input type="text" name="phone" onkeypress='return event.charCode >= 48 && event.charCode <= 57' maxlength="10" placeholder="+91" class="form-control form-control-sm " required>
              <div class="input-group-text"><i class="bi bi-phone" style="font-size: 18px;"></i></div>
             </div>
             </div>
             <div class="form-group">
              <label for="">Address:</label>
              <div class="input-group mt-1">
                <textarea name="address" cols='55' placeholder="sec/vill/city/country" rows="1" class="form-control form-control-sm " required></textarea>
              <div class="input-group-text"><i class="bi bi-journal-text"style="font-size: 18px;"></i></div>
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
           </form>
         <form action="#" method="post">
             <!--User/Login Auth model-->
         <div class="modal fade" id="modelLogin">
         <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
           <!-- Modal Header -->
             <div class="modal-header">
               <h4 class="modal-title "><i class="bi bi-door-open-fill"></i> Login</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
             <!-- Modal body -->
             <div class="modal-body">
             <div class="form-group">
              <label for="">Email:</label>
              <div class="input-group mt-1">
              <input type="email" name="username" placeholder="Example@gmail.com" class="form-control form-control-sm " required>
              <div class="input-group-text"><i class="bi bi-envelope-at-fill" style="font-size: 18px;"></i></div>
              </div>
             </div>
             <div class="form-group mt-2">
              <label for="">Password:</label>
              <div class="input-group mt-1">
              <input type="password" name="password" placeholder="4/8 Digits" id="passwordFeild"  class="form-control form-control-sm " required>
              <span class="input-group-text " style="cursor: pointer;">
                    <img src="png/eyeopen.png" onclick="showpassword()"  height="20" width="20" id="toggleicon" alt="">
                     </span>
             </div>
             </div>
             <div class="form-group mt-2 mb-2">
             <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" required>
             <label class="form-check-label" for="flexSwitchCheckDefault">Agree To continue!</label>
              </div>
             </div>
             <a href="#" class="btn btn-link float-start">Terms & conditions!</a>
                <a href="#" class="btn btn-link float-end">Forgot Password!</a><br><br>
                <hr class="mt-1 mb-2">
                <p class="text-center">or signup with</p>
                <div class="text-center">
                <i class="bi bi-facebook me-1" style="color:#1877F2;font-size:20px;"></i>
                <i class="bi bi-google me-1" style="color:red;font-size:20px;"></i>
                <i class="bi bi-twitter" style="color:#1DA1F2;font-size:20px;"></i>
                </div>
            
            </div>
                <!-- Modal footer -->
                     <div class="modal-footer">
                     <button type="submit" class="btn btn-success" name="btn">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                   </div>
                </div>
              </div>
           </div>
        </form>
      
      </ul>
    </div>
  </div>
</nav>
<section id="hero" class="d-flex align-items-center" style="background: linear-gradient(115deg, #3c8ce7, #00eaff);height:95vh;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <div class="typing">
          <h1 class="text-uppercase" style="color: white;">Relax, Recharge, Reclaim</h1>
          </div>
          <h3 style="color: white;">Your Path to Stress-Free Living!</h3>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <button type="button" id="get-started-btn" class="btn btn-primary me-3">Get Started</button>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i class="fa-light fa-circle-play" style="font-size: 40px;text-shadow:0px 5px 5px skyblue"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <div class="image-container">
          <img src="image/home.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

        <main id="main-content">
          <div class="container">
          <h2 class="text-center mt-3">About Us</h2>
          <div class="row">
            <div class="col-sm-6 text-center  ">
            <img src="png/about.png"  class="img-fluid animated" alt="" height="450" width="450" >
            </div>
          <!--/About -text -->
          <div class="col-md-5 mt-5 px-4 mb-5">
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Unde iure illo ullam suscipit non sit soluta ad repellat hic, ducimus, placeat voluptate eveniet cum. Odit amet illo nihil eius culpa? Et, amet laboriosam illo laborum quod a voluptatem similique odio est harum nemo ex in placeat. Officiis distinctio consequuntur quia reiciendis explicabo nemo minima nobis voluptatum voluptas numquam, voluptates quas doloribus dignissimos vitae ullam tempore veniam enim nisi repudiandae alias nihil saepe illo asperiores. Rerum omnis laudantium magnam vitae consectetur facere dolorem delectus nihil non repudiandae, animi impedit illum cupiditate laboriosam reprehenderit sequi iure quibusdam architecto soluta. Sit, cumque? Exercitationem, facilis deleniti? Quod, deserunt doloremque eius illo incidunt ducimus consequuntur eos tempora culpa possimus illum id officia fugit numquam minus?</p>
          </div>
          </div>
          </div>
        </main>
        <section class="service text-center" id="service">
		<div class="container">
			<div class="row">
				<h2>our services</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="heart img-responsive" src="img/service1.png" alt="">
							</div>
						</div>
						<h3>Heart problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="brain img-responsive" src="img/service2.png" alt="">
							</div>
						</div>
						<h3>brain problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="knee img-responsive" src="img/service3.png" alt="">
							</div>
						</div>
						<h3>knee problem</h3>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="single-service">
						<div class="single-service-img">
							<div class="service-img">
								<img class="bone img-responsive" src="img/service4.png" alt="">
							</div>
						</div>
						<h3>human bones problem</h3>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of service section -->
        
	<!-- team section -->
	<section class="team" id="team">
		<div class="container">
			<div class="row">
				<div class="team-heading text-center">
					<h2>our team</h2>
					<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member1.jpg" alt="member-1">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. M. Weiner, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Danielle, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member2.jpg" alt="member-2">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member3.jpg" alt="member-3">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Caitlin, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Joseph, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member4.jpg" alt="member-4">
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person">
						<img class="img-responsive" src="img/member5.jpg" alt="member-5">
					</div>
					<div class="person-detail">
						<div class="arrow-bottom"></div>
						<h3>Dr. Michael, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
				</div>
				<div class="col-md-2 single-member col-sm-4">
					<div class="person-detail">
						<div class="arrow-top"></div>
						<h3>Dr. Hasina, M.D.</h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
					</div>
					<div class="person">
						<img class="img-responsive" src="img/member6.jpg" alt="member-5">
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of team section -->
<!-- map section -->
<div class="api-map" id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 map" id="map"></div>
			</div>
		</div>
	</div><!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container mt-5">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>contact us</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 9:30 AM to 6:30 PM</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>leave us a message</h3>

						<form class="form">
							<input class="name" type="text" placeholder="Name">
							<input class="email" type="email" placeholder="Email">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->
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
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        data-mdb-ripple-init
        class="btn btn-link btn-floating btn-lg text-body m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
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
  © 2024 -- Made With <span style="color: red;font-size:20px;">&#9829;</span> by ROHIT and MOHIT
    
  </div>
  <!-- Copyright -->
</footer>
    <script src="js/index.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
	  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	  <script src="js/gmaps.js"></script>
	  <script src="js/smoothscroll.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/custom.js"></script>
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


<?php
include('connection.php');
if (isset($_POST['btn'])){
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

