<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" >
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet"> 
</head>
<body>

  <h1 style="text-align: center; font-family: 'Do Hyeon'; color: #ffffff; margin-top: 2%; font-size: 50px;">Online Voting</h1>
<div class="formdiv">
  <form method="post" action="login.php">
  <h2 style="text-align: left; font-family: 'Do Hyeon', sans-serif; margin-left: 55px; padding: 15px;color: #ffffff;">Login</h2>

  <img class="login" src="./272456.png">
       <?php include('errors.php'); ?>
      <div class="form-group">
        <strong><label for="exampleInputEmail1">Registration.no</label></strong>
        <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Reg.no" name="reg">
        
      </div>
      <div class="form-group">
        <strong><label for="exampleInputPassword1">Password</label></strong>
        <input type="password" class="form-control"  placeholder="Password" name="password">
      </div>
      
  
        <button type="submit" name="login" id="btn" class="btn btn-primary">Login</button>
      <p class="signal">Don't have an account? <a href="register.php">Sign up</a></p>
   </form>
 </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
</body>
</html>