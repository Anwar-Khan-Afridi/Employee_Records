<?php
  include('../db_con.php');
  $Id = $_GET['updateEmp'];

  /*----To fetch recorde of the employee Id----*/
  $sql= "SELECT * FROM `employee_tbl` WHERE Id='$Id'";
  $records = mysqli_query($conn, $sql);
  $data = mysqli_fetch_array($records);

  /*----To update recorde of the employee Id----*/
  if(isset($_POST['updt']))
  {
    $Name = $_POST['uname'];
    $Email = $_POST['email'];
    $Mobile = $_POST['mobile'];
    $Address = $_POST['address'];

    $sql="UPDATE `employee_tbl` SET `Id`='$Id',`Name`='$Name',`Email`='$Email',`Mobile`='$Mobile',`Address`='$Address' WHERE Id='$Id'";

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
   <form method="post">
     <div class="form-group my-5">
        <label>Name</label>
        <input type="text" name="uname" class="form-control" placeholder="Enter name" autofocus="true" required="true" value="<?php echo $data['Name'] ?>">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" required="true" value="<?php echo $data['Email'] ?>">
      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" class="form-control" placeholder="Mobile number" required="true" value="<?php echo $data['Mobile'] ?>">
      </div>
      <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" class="form-control" placeholder="Enter address" required="true" value="<?php echo $data['Address'] ?>">
      </div>
      <div class="form-group">
        <label>Upload Image</label>
        <input type="file" class="form-control" required="true" value="../images<?php echo $data['Image'] ?>">
      </div>

      <button type="submit" name="updt" class="btn btn-primary">Update</button>
    </form>
    </div>
  </body>
</html>