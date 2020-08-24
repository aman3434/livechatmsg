<?php 
include("connection.php");
error_reporting(0);
session_start();

$user=$_SESSION['usnm'];

if ($user)
{ }
else
{
  #header('location:index.php');
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Dashboard | Live Chat Messenger</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


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
    <link href="css/sticky-footer.css" rel="stylesheet">
<link href="css/dashboard.css" rel="stylesheet">
<link href="css/sticky-footer-navbar.css" rel="stylesheet">
  
  </head>
  <body class="d-flex flex-column h-100">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Live Chat Messenger</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <form class="form-inline my-2 my-lg-0" action="logout.php">
          <a class="nav-link"><font color="white">Logged as <?php echo "$user"; ?></font></a>          
          <input class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout" id="logout" value="Logout">
        </form>
 </nav>


<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard_room.php">
              <span data-feather="message-square"></span>
              Rooms
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard_createroom.php">
              <span data-feather="plus-circle"></span>
              Create Room
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard_enterroom.php">
              <span data-feather="users"></span>
              Enter Room Code
            </a>
          </li>
          
        </ul>       
      </div>
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome to Live Chat Messanger</h1>        
      </div>
      <div>
        <p class="text-center"><b>Web Based Real time chat messenger/system</b></p>        
      </div>

      <div class="table-responsive" align="center">
        <h5 class="h5">Chat Room Summery</h5> 
        <table class="table table-striped table-sm">
          <thead>
            <tr>              
              <th>Number of Chat Room Created</th>              
            </tr>
          </thead>
          <tbody>            
            <tr>
              <?php

              $querry = "SELECT * FROM ROOM WHERE user_id='$user'";
              $data=mysqli_query($conn,$querry);
              $total= mysqli_num_rows($data);
              if ($total!=0)
              {
                $sl=0;
                while ($result=mysqli_fetch_assoc($data))
                {
                  $sl=$sl+1; 
                }
              }
              else
              {
                $sl=0;
              }
              echo '<td>'.$sl.'</td>';
              ?>              
            </tr>            
          </tbody>          
        </table>
        <table class="table table-striped table-sm">
          <thead>
            <tr>              
               <th>Number of Chat Room Joined</th>           
            </tr>
          </thead>
          <tbody>            
            <tr>
              <?php
              $querry = "SELECT * FROM room WHERE person_id='$user'";
              $data=mysqli_query($conn,$querry);
              $total= mysqli_num_rows($data);
              if ($total!=0)
              {
                $sl=0;
                while ($result=mysqli_fetch_assoc($data))
                {
                  $sl=$sl+1; 
                }
              }
              else
              {
                $sl=0;
              }
              echo '<td>'.$sl.'</td>';
              ?>              
            </tr>
        
          </tbody>          
        </table>


      </div> 
     




    </main>
  </div>
</div>
<script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="js/feather.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
        

<footer class="footer mt-auto py-3" style="position:">
      <div class="container">
        <span class="text-muted">&copy 2020 Live Chat Messenger </span>
          <span class="text-muted" style="float: right; margin-right: 0;">Developed By Aman Agarwal</span>        
      </div>      
</footer>

</body>
</html>
