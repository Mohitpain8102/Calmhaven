function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
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
   window.location.href = "adminlogout.php";
  }
  });
  }

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

    