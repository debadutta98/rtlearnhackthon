<?php
include 'Log.php';
if(isset($_COOKIE['email']))
{
echo "<script> var i='{$local_url}/Home.php?massage=You are successfully logedin';window.location.href=i; </script>";
}
?>
<html>
  <head>
    <title>rtlearn</title>
    <!--rtlearn favicon-->
    <link rel="icon" href="rtlearn-logo.svg" type="image/svg">
 <link rel="stylesheet" type="text/css" href="index.css" />
<!--Bootstrao css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--bootstrap Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!--End of bootstarp links-->
  </head>
  <body style="background: linear-gradient(to right, black, #1565c0);color:white;">
<div style="background-color:white;height:70px;display:flex;justify-content:center;">
  <a href="https://learn.rtcamp.com/" style="text-decoration:none;"><img src="rtlearn-logo.svg" width="70px" height="70px"></a>
<div>
  <!-- login page -->
<section id="login">
    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <form action="checklogin.php" method="post" class="box">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your login and password!</p> <input type="text" name="email" placeholder="Username"> <input type="password" name="password" placeholder="Password">
                    <a class="register text-muted" href="/register.php">Register Now?</a>
                    <input type="submit" name="" value="Login" href="#">
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<script src="index.js" type="text/javascript"></script>
  </body>
</html>
