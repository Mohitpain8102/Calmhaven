function showpassword(){
    var input = document.getElementById("password");
    var icon = document.getElementById("toggleicon");
     if(input.type == "password")
     {
     input.type = "text";
     icon.src = "png/eyeclose.png";
    }
    else
    { 
     input.type = "password";
     icon.src = "png/eyeopen.png";
    }
    }
    function showPassword(){
      var input = document.getElementById("passwordFeild");
      var icon = document.getElementById("imageIcon");
       if(input.type == "password")
       {
       input.type = "text";
       icon.src = "png/eyeclose.png";
      }
      else
      { 
       input.type = "password";
       icon.src = "png/eyeopen.png";
      }
      }
    
     /*tooltip*/
     var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
     var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
     return new bootstrap.Tooltip(tooltipTriggerEl)
    })

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
