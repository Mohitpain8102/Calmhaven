var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)
});

//display alert box on website
function popup(){
Swal.fire({
title: "Are you want to?",
icon: "warning",
showCancelButton: true,
confirmButtonColor: "#3085d6",
cancelButtonColor: "#d33",
confirmButtonText: "Logout!"
}).then((result) => {
if (result.isConfirmed) {
 window.location.href = "logout.php";
}
});
}
 /*internet connection*/
 window.addEventListener("offline", function(){
    this.window.alert = Swal.fire({
    position: "top-bottom",
    icon: "alert",
    title: '<i class="bi bi-wifi-off" style="color:red;"></i> You Are Offline!',
    showConfirmButton: false,
    timer: 1500
  })
  });
  window.addEventListener("online", function(){
    this.window.alert = Swal.fire({
    position: "top-bottom",
    icon: "alert",
    title: '<i class="bi bi-wifi" style="color:green;"></i> You Are online!',
    showConfirmButton: false,
    timer: 1500
  })
  });
//for get started button
document.addEventListener('DOMContentLoaded', function() {
    // Get the button element
    var getStartedBtn = document.getElementById('get-started-btn');

    // Get the main content element
    var mainContent = document.getElementById('main-content');

    // Scroll to the main content when the button is clicked
    getStartedBtn.addEventListener('click', function() {
        mainContent.scrollIntoView({ behavior: 'smooth' });
    });
});
