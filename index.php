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
    <div class="container my-5">
      <button class="btn btn-primary"><a href="operations/insert.php" class="text-light">Add Employee</a></button>

      <table class="table table-striped my-5">
  <thead>
    <tr>
      <th scope="col">E_Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include('db_con.php');
    $sql        = "select * from `Employee_tbl`";
    $records    = mysqli_query($conn,$sql);
    while($data = mysqli_fetch_array($records))
      {
        echo "<tr>";
        echo "<th scope='row'>".$data['Id']."</th>
        <td>".$data['Name']."</td>
        <td>".$data['Email']."</td>
        <td>".$data['Mobile']."</td>
        <td>".$data['Address']."</td>
        <td> <img style='max-width: 190px; max-height: 80px;' src='images/".$data['Image']."'</td> <td><button class='btn btn-primary'><a href='operations/update.php?updateEmp=$data[Id]' class='text-light'>Update</a></button> <button class='btn btn-danger'><a href='operations/delete.php?deleteEmp=$data[Id]' class='text-light'>Delete</a></button> </td>";
        echo "</tr>";
      }
    ?>  
  </tbody>
</table>

    </div>
  </body>
</html>