
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>RuangAdmin - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-3 col-sm-8 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-2">
          <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <form id="loginForm">
                    <h3 class="mb-4">Login</h3>
                     <div class="row">
                     <div class="col-sm-12">
                     <div class="alert alert-success d-none" role="alert">
                    This is a success alert—check it out!
                    </div>
                    <div class="alert alert-danger d-none" role="alert">
                    This is a danger alert—check it out!
                    </div>
                    </div>
                     </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="username" id="username">
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="password" id="password">
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4 btn-block">Login</button>
                    <p class="mb-2 text-muted">Forgot password? <a href="#">Reset</a></p>
                    <p class="mb-0 text-muted">Don’t have an account? <a href="#">Signup</a></p>
                </div>

                    </form>
                   
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script> -->
</body>

</html>


<?php
 include 'include/header.php';
 ?>

 <?php
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";

 include 'include/footer.php';
 
?>