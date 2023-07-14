<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    
   $email = mysqli_real_escape_string($conn, $_POST['usermail']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM users_form WHERE email = '$email' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO users_form(email, password) VALUES('$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/hd_lg_rg.css">
</head>
<body>
<header >
      <div class="logo"> 
      <i><i class="fa fa-code" aria-hidden="true" style="color:beige",
                style="color:rgb(255, 0, 68);"><img src="../images/icons8-airport-noblack.png" alt="">E-Race</i>
            </i>
      </div>
      
      <nav class="nav"> 
         <ul class="menu">
         <li >
                    <a href="../home.html">Home</a>
                </li>
                <li  >
                  <a href="../packages.html">Packages</a>
              </li> 
              <li >
                  <a href="../about.html">About</a>
                  
              </li>
              <li>
                  <a href="../contact.html">Contact</a>
              </li>
                <li class="active">
                  <a href="login_form.php">

                     <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" 
                     preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="currentColor" 
                     d="M256 288c79.5 0 144-64.5 144-144S335.5 0 256 0S112 64.5 112 144s64.5 144 144 144zm-94.7 32C72.2 320 0 392.2 0 481.3c0 17 13.8 30.7 30.7 30.7h450.6c17 0 30.7-13.8 30.7-30.7c0-89.1-72.2-161.3-161.3-161.3H161.3z"/>
                     </svg>
                 </a>
               </li>
         </ul>
      </nav>
    </header>
<div class="container">
   <div class="form-box">
      <div class="button-box">
            <div id ="btn-signup"></div>
            <button type="button" class="toggle-btn" onclick ="SignIn()"><a href="login_form.php">Log In</a> </button>
            <button type="button" class="toggle-btn" onclick="SignUp()"> <a href="register_form.php">Sign Up</a> </button>
      </div>
      <div class="social-icons">
            <a href="https://www.facebook.com" class="socials">
               <img src="../css/icons/fb.jpg">
            </a>
            <a href="https://www.twitter.com" class="socials">
               <img src="../css/icons/twitter.jpg">
            </a>
            <a href="https://www.instagram.com" class="socials">
               <img src="../css/icons/ig.jpg">
            </a>
      </div>
   <form action="" method="post" class="pform"> 
      <h3 class="title">Register now</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <div class="form-control">
         <input type="email" name="usermail" class="input-field" placeholder="enter your email" class="box" required>
      </div>
      <div class="form-control">
         <input type="password" name="password" class="input-field" placeholder="enter your password" class="box" required>
      </div> 
      <div class="form-control">
         <input type="password" name="cpassword" class="input-field" placeholder="confirm your password" class="box" required>
      </div>

      <input type="submit" value="register now" class="form-btn" name="submit">
   </form>

   </div>
<!-- footer section starts  -->

<section class="footer">


   <div class="credit"> created by <span>Dev's Team</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->
</body>
</html>