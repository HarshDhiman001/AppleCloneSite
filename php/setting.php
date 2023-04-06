<?php
include 'navbar.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
<!-- table start  -->
<table class="table" id="mytable">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
      include 'connect.php';
      $sql = "SELECT * FROM `appledata`";
      $data = mysqli_query($con,$sql);
      foreach($data as $apple)
      {
        $id=$apple['id']; 
        $name=$apple['name'];
        $email=$apple['email'];
        $password=$apple['password'];
        echo'
        <tr>
          <th scope="row">'.$id + '1200'.'</th
          <td>'.$name.'</td>
          <td>'.$email.'</td>
          <td>'.$password.'</td>
          <td>
          <button type="submit" class="btn btn-primary" id="btn"><a href="update.php?updateid='.$id.'">Update</a></button>
          </td>
          <td>
          <button type="submit" class="btn btn-primary" id="btn"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
          </td>
        </tr>';
      }
    ?>
  </tbody>
</table>
<!-- table ends  -->
  </body>
</html>