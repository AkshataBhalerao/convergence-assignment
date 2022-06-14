<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin: 30px;">
<div style="text-align:center;">
    <img src="logo.jpg" alt="logo"/>
</div>
<table class="table table-bordered" style="border: 30px solid #dee2e6;">
  <thead>
    <tr style="background-color:#5FBAE6;">
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "convergence";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($conn) {
        echo "Connection successful";
    } else {
        echo "connection failed";
    }

    echo "<br>";

    $sql = "SELECT * FROM `employees` LIMIT 5";
    $result = mysqli_query($conn, $sql);


    $num = mysqli_num_rows($result);
    echo "100 Out of Top";
    echo $num;
    echo " Records found in the Convergence Assignment - employee database<br>";
    echo "<br>";

    while($row = mysqli_fetch_assoc($result)){
        ?>

    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['password'];?></td>
    </tr>
   <?php
    }
   ?>
  </tbody>
</table>
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>