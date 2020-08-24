<?php 
include("connection.php");
error_reporting(0);
session_start();

$user=$_SESSION['usnm'];

$host_name=$_GET['host'];
$r_name=$_GET['room_name'];
$p_name=$_GET['person_name'];
$ta="msg".$host_name.$r_name;


if ($user==$host_name or $user==$p_name)
{
  // echo "Logged as".$user."<br>";
  // echo "Host Name".$host_name."<br>";
  // echo "person name".$p_name."<br>";
}
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
    <title>Chat Room | Live Chat Messenger</title>

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
<link href="css/custom-style1.css" rel="stylesheet">
  
</head>
  <body class="">
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Live Chat Messenger</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul class="navbar-nav">                 
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php"><font color="white">Dashboard</font></a>            
          </li>                
        </ul>        
     
      <form class="form-inline my-2 my-lg-0" action="logout.php">
        <a class="nav-link"><font color="white">Logged as <?php echo "$user"; ?></font></a>          
        <input class="btn btn-secondary my-2 my-sm-0" type="submit" name="logout" id="logout" value="Logout">
      </form>
    </nav>
    <center>
    <div class="pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3" align="center">Chat Room for <?php echo $host_name." And  ".$p_name; ?></h1>        
      </div>
      </center>
    <main role="main">
      <div class="container" style="padding-top: 0!important; ">
        <h2 class="h4">Chat Messages</h2>
        <div class="row">          
          <div class="col-md-10 order-md-1">
              <div class="container-chat">
              <div class="chat-scrl">

                  
              </div></div>      
            <br>
            <input type="text" id="usermsg" name="usermsg" class="form-control" placeholder="Type your message here">
            <br>
            <button class="btn btn-success" name="submitmsg" id="submitmsg">Send</button>
            <div class="chat-box"></div>
          </div>
        </div>
      </div>                
    </main>

<script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
<script src="js/feather.min.js"></script>
<script src="js/Chart.min.js"></script>
<script src="js/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script>
// code for fetching messages from db

setInterval(runFunction,1000);

function runFunction()
{
  $.post("fetchmsg.php",{room:'<?php echo $ta?>',host:'<?php echo $host_name?>',person:'<?php echo $p_name?>'},

    function(data,status)
    {
      document.getElementsByClassName('chat-scrl')[0].innerHTML = data;
    }
    )
}

// Get the input field
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});

$("#submitmsg").click(function(){
  var clientmsg = $("#usermsg").val();
  $.post("postmsg.php",{text:clientmsg,room:'<?php echo $ta?>',ip:'<?php echo $_SERVER['REMOTE_ADDR'] ?>'},

  function(data,status)
  {
    document.getElementsByClassName('chat-scrl')[0].innerHTML = data;
  }  
  );

  $("#usermsg").val("");
  return false;
});

</script>



<footer class="footer mt-auto py-3" style="position:">
  <div class="container">
    <span class="text-muted">&copy 2020 Live Chat Messenger </span>
    <span class="text-muted" style="float: right; margin-right: 0;">Developed By Aman Agarwal</span>        
  </div>      
</footer>
</body>
</html>