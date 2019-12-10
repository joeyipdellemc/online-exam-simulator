<?php
	include 'inc/header.php';
?>

<style>
html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/5/c/8/155027.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}
</style>

<div class="container">

  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Registration</h3>
        <div class="d-flex justify-content-end social_icon">
          <span><i class="fab fa-facebook-square"></i></span>
          <span><i class="fab fa-google-plus-square"></i></span>
          <span><i class="fab fa-twitter-square"></i></span>
        </div>
      </div>
    <div class="card-body">
      <form action="" method="post">
<!-- Name -->        
        <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Name" name="name" id="name">
        </div>
<!-- Username -->        
        <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-card"></i></span>
          </div>
          <input type="text" class="form-control" placeholder="Userame" name="username" id="Username">
        </div>       
<!-- Password -->
        <div class="input-group form-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" class="form-control" placeholder="password" name="password" id="password">
        </div>
<!-- Email -->        
        <div class="input-group form-group">
          <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-envelope"></i></span>
          </div>
          <input type="email" class="form-control" placeholder="Email Address" name="email" id="email">
        </div>
        

        <div class="row align-items-center remember">
          <input type="checkbox">Remember Me
        </div>
        
        <div class="form-group">
          <input type="submit" id="regsubmit" value="Signup" class="float-right login_btn">
        </div>
        <span class="loginAlert" id = "state"></span>
      </form>
    </div>
    </div>
  </div>
</div>


