<?php
  
  if(isset($_POST['sbt']))
  {
    include('../db_con.php');

    $Name     = $_POST['uname'];
    $Email    = $_POST['email'];
    $Mobile   = $_POST['mobile'];
    $Address  = $_POST['address'];
    $ImgName  = $_FILES['Imagess']['name'];
    $tmpName  = $_FILES['Imagess']['tmp_name'];

    move_uploaded_file($tmpName,"../images/$ImgName");

    $sql="INSERT INTO `employee_tbl`(`Name`, `Email`, `Mobile`, `Address`, `Image`) VALUES ('$Name','$Email','$Mobile','$Address','$ImgName')";

    $result = mysqli_query($conn, $sql);
    if($result)
    {
      header('location:../index.php');
    }
    
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Employee Records</title>
  </head>
  <body>
    <div class="container">
   <form method="post" action="insert.php"  enctype="multipart/form-data">
     <div class="form-group my-5">
        <label>Name</label>
        <input type="text" name="uname" class="form-control" placeholder="Enter name" autofocus="true" required="true">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required="true">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" class="form-control" placeholder="Mobile number" required="true">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter address" required="true">
      </div>
      <div class="form-group">
        <label>Upload Image</label>
        <input type="file" name="Imagess" class="form-control" required="true">
      </div>

      <button type="submit" name="sbt" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>