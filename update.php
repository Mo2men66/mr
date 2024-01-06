<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
   <section class="flex">
      <a href="home.html" class="logo">Mr.linguistic</a>
      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>
      <div class="profile">
         <img src="images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Mo'men Ali</h3>
         <p class="role">student</p>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
   </section>
</header>   
<div class="side-bar">
   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>
   <div class="profile">
      <img src="images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Mo'men Ali</h3>
      <p class="role">student</p>
      <a href="profile.php" class="btn">view profile</a>
   </div>
   <nav class="navbar">
      <a href="home.html"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.html"><i class="fas fa-question"></i><span>about</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>
</div>
<section class="form-container">
   <form action="update-ver.php" method="post" enctype="multipart/form-data">
      <h3>update profile</h3>
      <p>Name</p>
      <input type="text" name="name" placeholder="Enter Name" maxlength="50" class="box">
      <p>email</p>
      <input type="email" name="email" placeholder="@gmail.com" maxlength="50" class="box">
      <p> password</p>
      <input type="password" name="old_pass" placeholder="enter your  password" maxlength="20" class="box">
      <p>new password</p>
      <input type="password" name="new_pass" placeholder="enter your new password" maxlength="20" class="box">
      <p>confirm New password</p>
      <input type="password" name="c_pass" placeholder="confirm new password" maxlength="20" class="box">
      <input type="submit" value="update profile" name="submit_update" class="btn">
   </form>
</section>
<footer class="footer">
   &copy; copyright @ 2023 by <span>Mo'men Ali wlso7ba Alkrma</span> | all rights reserved!
</footer>
<script src="js/script.js"></script>
</body>
</html> 