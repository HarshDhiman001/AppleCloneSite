<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/onlinestore/css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <form action="insert.php" method="post" id="frm">
  <div class="form-group">
    <label>Your Full Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>Your Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">
  </div>
  <div class="form-group">
    <label>Conf-Password</label>
    <input type="password" class="form-control" name="cpassword" placeholder="Re-Enter your password">
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">SignIn</button>
      </div>
</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
    jQuery('#frm').validate({
      rules:{
        name:"required",
        email:"required",
        password:
        {
          required:true,
          minlength:8,
          maxlength:10
        },
        cpassword:{
          required:true,
          equalTo:"#password"        
        }
      },
      messages:{
        name:"please enter your name",
        email:"please enter your valid email",
        password:
        {
          required:"enter your password",
          minlength:"min length is 8",
          maxlength:"max length is 10"
        },
        cpassword:{
          required:"enter your password again",
          equalTo:"password is not same"        
        }
      }
    })  
    </script>
  </body>
</html>