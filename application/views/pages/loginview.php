<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Whizzie | Login</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

  <link rel="stylesheet" href="css/style.css">

  <?=$css?>
  <?=$firebase?>
  
  <?=$js_classes?>
  <?=$css_login?>
</head>

<body>

<div class="background-image"></div>

<div class="cont">
  <div class="form sign-in" >
    <br><br><br><br><br><br>
    <h2>Sign In</h2>
    <label>
      <span>Email</span>
      <input type="email" id = "loginEmail"/>
    </label>
    <label>
      <span>Password</span>
      <input type="password" id = "loginPass" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <br><br>
    <div style="text-align:center;">
      <a class="primary-btn cta-btn" id = "loginButton">Sign In</a>
    </div>
    <br><br><br><br><br><br><br><br>
    <div style="text-align:center;padding: 20px; border-radius:20px;">
        <a href="<?=base_url()?>">
          <h4>I wanted to explore first!</h4><br>
          <img src="<?=base_url("assets/img/logo_new_square.png")?>" alt="" style="object-fit: cover; height: 150px;">
        </a>
    </div>
  </div>

  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h1 style="color:white; margin-top:300px;">Join Whizzie today!</h1>
        <p>Sign up and discover great amount of new opportunities!</p>
      </div>
      <div class="img__text m--in">
        <h1 style="color:white; margin-top:300px;">Already have an account?</h1>
        <p>If you already has an account, just sign in. We've missed you!</p>
      </div>
      <div class="img__btn" style="margin-top:100px;">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <div class="form sign-up">
      <br><br><br><br><br><br>
      <h2>Sign Up</h2>
      <label>
        <span>Full Name</span>
        <input type="name" id = "fullName" />
      </label>
      <label>
        <span>Email</span>
        <input type="email"  id = "newUserEmail"/>
      </label>
      <label>
        <span>Password</span>
        <input type="password" id ="newPassword" />
      </label>
      <label>
        <span>Confirm Password</span>
        <input type="password" id = "confirmNewPassword" />
      </label>
      <br><br>
      <div style="text-align:center;">
        <a class="primary-btn cta-btn" id = "signUpButton">Sign Up</a>
      </div>

      <br><br>
      
      <div style="text-align:center;padding: 20px; border-radius:20px;">
          <a href="<?=base_url()?>">
            <h4>I wanted to explore first!</h4><br>
            <img src="<?=base_url("assets/img/logo_new_square.png")?>" alt="" style="object-fit: cover; height: 150px;">
          </a>
      </div>

    </div>
  </div>
</div>
  
    <script  src="js/index.js"></script>
    <?=$js_login?>
    <?=$js_functions?>


<div class="container" style="background:black;">
  
</div>

</body>

</html>
