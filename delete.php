<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Records</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
</body>
</html>
<?php
error_reporting(0);
include("connection.php");
$id = $_POST['sno'];
$query = "DELETE FROM signupdetails WHERE sno = '$id' ";
$data = mysqli_query($conn,$query);
if ($data)
{
    echo '<script>
    Swal.fire({
        position: "middle",
        icon: "warning",
        title: "Deleted Successfully!",
        showConfirmButton: false,
        timer: 1500
      });</script>';
      ?>
        <meta http-equiv="refresh" content="0;url=http://localhost/project/fetch.php" />
<?php
}
else{
    echo "Record Not Delete";
}
?>
