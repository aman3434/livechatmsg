<?php
include("connection.php");
error_reporting(0);
session_start();
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login | Live Chat Mssenger</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="css/floating-labels.css" rel="stylesheet">
  </head>
  <body>
    <form class="form-signin" method="post">
  <div class="text-center mb-4">
    <img class="mb-4" src="logo1.png" alt="" width="155" height="90">
    <h1 class="h3 mb-3 font-weight-normal">Live Chat Messenger</h1>
    <p><b>User Login</b> </p>
  </div>

  <div class="form-label-group">
    <input type="text" id="userid"  name="userid" class="form-control" placeholder="Username" required autofocus>
    <label for="userid">Username</label>
  </div>

  <div class="form-label-group">
    <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password" required>
    <label for="inputPassword">Password</label>
  </div>

  
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
  <p class="mt-3 text-muted text-center"><a class="" href="forget_password.php">Forget Password?</a></p>
  <p class="text-muted text-center">New User? <a class="" href="register.php"><b>Sign-Up</b></a></p>
  <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 </p>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>
</html>

<?php

if (isset($_POST['submit']))
{
  $us=$_POST['userid'];
  $pw=$_POST['pwd'];
  
  $query="SELECT * FROM user_login_details WHERE user_id='$us' && user_pwd='$pw'";

  $data=mysqli_query($conn,$query);

  $total=mysqli_num_rows($data);

  //echo $data;
  //echo "<br>".$total;

  if ($total==1)
  {
    echo "<script>alert('Login Sucessful')</script>";
    header('location:dashboard.php');
    $_SESSION['usnm']=$us;
  }
  else
  {
    echo "<script> alert('Enter a valid Username and Password'); </script>";
  }
}

?>

