<?php
if(isset($_POST['name'])){
  $server = "localhost";
  $username = "root";
  $password = "";
  
  $con = mysqli_connect($server,$username,$password);
  
  if(!$con){
      die("Connection to this database faild due to" . mysqli_connect_error());
  
  }
  // echo "Success connecting to database";
  $name = $_POST['name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  
  $country = $_POST['country'];
  $subject = $_POST['subject'];
  
  
  $sql = "INSERT INTO `feedback` ( `name`, `mobile`, `email`, `country`, `subject`) 
  VALUES ('$name', '$mobile', '$email', '$country', '$subject');";
  // echo $sql;
  if($con->query($sql)==true){
    echo " succesfully inserted";
  }
  else {
      echo "ERROR: $sql <br> $con->error";
  }
  $con->close();
  
  }


?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="CSS/contact.css">
</head>
<body>
  <?php
    include 'header.php';
  ?>
<h3>Contact Us</h3>

<div class="container">

  <form action="index.php" method="post">
  <label for="fname">Name</label>
    <input type="text" id="name" name="firstname" placeholder="Enter your name..">
     <label for="lname">Mobile</label>
    <input type="number" id="mobile" name="mobile" placeholder="Enter your mobile number..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">India</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <button>Submit</button>
  </form>
</div>

</body>
</html>
