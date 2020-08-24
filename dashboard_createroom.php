<?php 
include("connection.php");
error_reporting(0);
session_start();

$user=$_SESSION['usnm'];

if ($user)
{ }
else
{
  header('location:index.php');
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Createroom | Live Chat Messenger</title>


    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Favicons -->


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
    <link href="css/floating-labels-cr-room.css" rel="stylesheet">
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
            <a class="nav-link" href="dashboard.php">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="dashboard_room.php">
              <span data-feather="message-square"></span>
              Rooms
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="dashboard_createroom.php">
              <span data-feather="plus-circle"></span>
              Create Room<span class="sr-only">(current)</span>
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
        <h1 class="h2">Create Chat Room</h1>        
      </div>

      <div class="container">
        <div class="col-md-8 order-md-1">
          <form class="form-signin"  method="post">
            <div class="text-center mb-4">              
              <h3 class="h4 mb-3 font-weight-normal">Chat Room Name</h3>              
            </div>
            <div class="form-label-group">
              <input type="text" id="room-name"  name="room_name" class="form-control" placeholder="Room Name" required autofocus autocomplete="off" data-validation="alphanumeric" data-validation-allowing="_">
              <label for="room-name">Room Name</label>
              <div class="invalid-feedback">
                  Room Name should be between 3 to 15 characters.
              </div>
            </div>    
            <div class="form-label-group">
              <input type="text" id="pr-name"  name="person_name" class="form-control" placeholder="Room Name" required >
              <label for="pr-name">Person id with whom you want to chat</label>
              <div class="invalid-feedback">
                  Valid ID Required.
              </div>
            </div>         
            <button class="btn btn-lg btn-primary btn-block" type="submit" id="cr-room" name="submit">Start Chatting</button>  
          </form>      
        </div>
      </div> 
    </main>
  </div>
</div>
<script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
        <script src="js/feather.min.js"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
        <script src="js/form-validation.js"></script>

       <!--  <script>
          $(document).ready(function () {
          $("#cr-room").click(function(){
          var fn = $("#room-name").val();
          var regex = /^[0-9a-zA-Z\_]+$/
          alert('Room name should be alphanumeric only.');
          });
          });
        </script>  -->

<footer class="footer mt-auto py-3" style="position:">
      <div class="container">
        <span class="text-muted">&copy 2020 Live Chat Messenger </span>
          <span class="text-muted" style="float: right; margin-right: 0;">Developed By Aman Agarwal</span>        
      </div>      
</footer>
</body>
</html>

<?php

if (isset($_POST['submit']))
{
  
  $r_name=$_POST['room_name'];
  $p_name=$_POST['person_name'];
  $ta=$user.$r_name;
  //echo "$ta";

  $regex = preg_match(' /^[0-9a-zA-Z\_]+$/',$r_name);
  #$regex = preg_match('[@!#$%^&*()<>?/\|}{~:]',$r_name);
  
  if (strlen($r_name)>15 or strlen($r_name)<3)
  {
    $msg="Please Choose a Room Name between 3 to 15 characters. ";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location ="http://localhost:8080/chatsystem/dashboard_createroom.php" ';
    echo '</script>';
  }  

  elseif (!$regex) 
  {
    $msg="Room name should be alphanumeric only.  ";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location ="http://localhost:8080/chatsystem/dashboard_createroom.php" ';
    echo '</script>';
  }

  else
  {
    $query="SELECT * FROM room WHERE user_id='$user' and room_name='$r_name'";
    $result=mysqli_query($conn,$query);

    if ($result)
    { $total=mysqli_num_rows($result);
      //echo "$user";
      //echo "$total";
      if($total>0)
      { 
        $msg="Room Alredy in USE!. Please choose a different Room Name. ";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location ="http://localhost:8080/chatsystem/dashboard_createroom.php" ';
        echo '</script>';
      }
      else
      {
        $newq="INSERT INTO room (user_id,room_name,person_id,room_time) VALUES ('$user','$r_name','$p_name',CURRENT_TIMESTAMP)";
        if (mysqli_query($conn,$newq))
        {        
          $cr_ta="CREATE TABLE msg".$ta." (sl INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,msg TEXT NOT NULL,sender TEXT NOT NULL,ip TEXT NOT NULL,mtime DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP)";
          //echo "$cr_ta";
          $sucss=mysqli_query($conn,$cr_ta);
          if ($sucss)
          {
            $msg="Your Room is Ready for Chat!";
            echo '<script language="javascript">';
            echo 'alert("'.$msg.'");';
            echo 'window.location ="http://localhost:8080/chatsystem/getroom.php?host='.$user.'&room_name='.$r_name.'&person_name='.$p_name.'" ';
            echo '</script>';
          }
          else
          {
            echo "Error!".mysqli_error($conn);
          }
        }
      }
    }
  }
}
?>