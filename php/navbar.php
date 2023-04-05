<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
  </head>
  <body>
<!-- navbae start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav1">
        <a class="navbar-brand" href="home.php">
          <img src="/onlinestore/images/logo.png" id="applelogo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="store.php">Store<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mac.php">Mac</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ipad.php">iPad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="iphone.php">iPhone</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="watch.php">Watch</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="airpods.php">Airpods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php" data-toggle="modal" data-target="#exampleModal">MyProfile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php" data-toggle="modal" data-target="#Modaluser">NewUser</a>
          </li>
        </ul>
        <a class="navbar-brand" href="setting.php">
        <img class="setting" src="/onlinestore/images/OIP.jpg" id="settinglogo" alt="">
      </a>
      </div>

  </nav>
<!-- navbar end -->

<!--login start-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Apple Login</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<?php
include 'login.php';
?>
</div>
</div>
</div>
</div>
<!--login end-->

<!--new user start-->
<div class="modal fade" id="Modaluser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User SignIn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
      include 'newuser.php';
      ?>
      </div>
    </div>
  </div>
</div>
<!--new user end-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
<!-- Button trigger modal -->
<!-- Modal -->