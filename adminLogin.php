<?php
include 'header.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="pathLogin.css">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="loginHeader">
<ul class="nav nav-pills nav-fill">
<li class="nav-item">
    <a class="nav-link " aria-current="page" href="pLogin.php">Patient</a>
  </li>
  <li class="nav-item" >
    <a class="nav-link" href="dLogin.php">Doctor</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="pathLogin.php">Pathology</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="adminLogin.php">Admin</a>
  </li>
</ul>
</div>

<div class="box" >
        <div class="container">
            <div class="login-content">
                
                <div class="login-form">
                    <form action="" method="post" name="login">
                       
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name" required="true" name="username">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" required="true">
                        </div>
                                <div class="checkbox">
                                    <label class="pull-right">
                                <a href="forgot-password.php">Forgot Password?</a>
                            </label>

                                </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="login">Sign in</button>
                                
                            
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>
</html>