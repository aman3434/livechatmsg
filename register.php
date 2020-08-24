<?php 
include("connection.php");
error_reporting(0);
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>New User Signup | Live Chat Messenger</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/starter-template/">

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
    <link href="css/starter-template.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/form-validation.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">Live Chat Messenger</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">          
                  
        </ul>
        
      </div>
    </nav>
    <!--  Main Body Tag Starts here -->

<main role="main" class="container">
    <div class="container">
      <div class="row">
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">New User Signup</h4>
          <form class="needs-validation" method="post" novalidate >
            
            <div class="col-md-8 mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="Name" placeholder=""   name="user_nm" required>
                <div class="invalid-feedback">
                  Valid Name is required.
                </div>
              </div>              
           
            <div class="col-md-8 mb-3">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="user_id" placeholder="" required >
              <div class="invalid-feedback">
                Valid username is required.
              </div>
            </div>    

            <div class=" col-md-8 mb-3">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="user_pwd" placeholder="" required>
              <div class="invalid-feedback">
                Valid password is required. 
              </div>
            </div> 
            <div class="col-md-8 mb-3">
              <label for="Confirm-password">Confirm Password</label>
              <input type="password" class="form-control" id="Confirm-password" name="user_cpwd" placeholder="" required>
              <div class="invalid-feedback">
                Entered password did not match.
              </div>
            </div>             
            <div class="col-md-8 mb-3">
                <label for="security-question">Security Question</label>
                <select class="custom-select d-block w-100" id="security-question" name="user_sq" required>
                  <option value="">Choose...</option>
                  <option>What primary school did you attend?</option>
                  <option>What was your childhood nickname?</option>
                  <option>What is the name of your favorite childhood friend?</option>
                  <option>In what city or town was your first job?</option>
                  <option>In what city does your nearest sibling live?</option>
                  <option>What is your pets name?</option>
                  <option>What is the name of your favorite childhood teacher?</option>
                  <option>What was the first concert you attended?</option>
                  <option>What is your mothers middle name?</option>
                  <option>What was the make and model of your first car?</option>
                </select>
                <div class="invalid-feedback">
                  Please select a security question.
                </div>
              </div>
              <div class="col-md-8 mb-3">
              <label for="sq-answer">Answer</label>
              <input type="text" class="form-control" id="sq-answer" name="user_sq_ans" placeholder="" required>
              <div class="invalid-feedback">
                Please privide answer for security question. 
              </div>
            </div>
            <div class="col-md-8 order-md-1">           
            <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Signup" id="regis">       
            <!--<button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Register</button>-->
            </div>
          </form>
        </div>
     </div>
   </div>
</main>

    <!-- /.container -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>

    <script src="js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Home script--->     

    <script src="/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- Home script ends--->

    <script src="js/form-validation.js"></script>
    
    <script>     
      var usnm = document.getElementById("username");
      var valid;

      function validateUsername()
      {
        $(document).ready(function() {
        $("#regis").click(function() {
        var fn = $("#username").val();
        var regex = /^[0-9a-zA-Z\_]+$/
        //alert(regex.test(fn));
        if (regex.test(fn))
        {
          usnm.setCustomValidity("");
          //alert('True');
        }
        else
        {
          usnm.setCustomValidity("Usernames is Not valid");
          //alert('False');
        } 

        });
        });  
      }

      usnm.onchange = validateUsername;
      usnm.onkeyup = validateUsername;
    </script> 

    <script>
      var password = document.getElementById("password");
      var confirm_password = document.getElementById("Confirm-password");

      function validatePassword()
      {
        if(password.value != confirm_password.value)
        {
          confirm_password.setCustomValidity("Passwords Don't Match");
        } 
        else
        {
          confirm_password.setCustomValidity('');
        }
      }
      password.onchange = validatePassword;
      confirm_password.onkeyup = validatePassword;
      </script>

<?php
if (isset($_POST['submit'])) 
{
  $u_nm=$_POST['user_nm'];
  $u_id=$_POST['user_id'];
  $u_pwd=$_POST['user_pwd'];
  $u_cpwd=$_POST['user_cpwd'];
  $u_sq=$_POST['user_sq'];
  $u_sqans=$_POST['user_sq_ans'];  
  

  //echo "$u_nm<br>";
  //echo "$u_id<br>";
  //echo "$u_pwd<br>";
  //echo "$u_cpwd<br>";
  //echo "$u_sq<br>";
  //echo "$u_sqans<br>";

  
    if ($u_nm!="" && $u_id!="" && $u_pwd!="" && $u_cpwd!="" && $u_sq!="" && $u_sqans!="" )  
    {
      $querry="INSERT INTO user_login_details VALUES ('$u_nm','$u_id','$u_pwd','$u_sq','$u_sqans')" ;

      $data=mysqli_query($conn,$querry);

      if($data)
      { 
        echo "<script>alert('Signup Sucessful')</script>";
        ?>
        <META HTTP-EQUIV="Refresh" CONTENT = "0; URL=http://localhost:8080/chatsystem/index.php">
        <?php      
      }
      else
      {
        echo '<div class="container"><div class="col-md-8 order-md-1"><p align="center"><font color=red>Regestration Error <br></font>';
        echo '<font color=red>Error: '. mysqli_error($conn).'</font></p></div></div>';
      }         
    }
    
}
?>
    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">&copy 2020 Live Chat Messenger</span>
      </div>
    </footer>

  </body>
</html>
