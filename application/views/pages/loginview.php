<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login/Registration Form Transition</title>
  
  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/style.css">

        <?=$css?>
		<?=$firebase?>
		
		<?=$js_classes?>
        <?=$js_functions?>
        <?=$css_login?>
        
  
</head>

<body>

<div class="background-image"></div>

<div class="cont">
  <div class="form sign-in" >
      <br><br><br><br><br>
      <div style="text-align:center;">
        <img src="<?=base_url("assets/img/logo_new_square.png")?>" alt="" style="object-fit: cover; height: 150px;">
      </div>
      <br><br>
    <h2>Sign In</h2>
    <label>
      <span>Email</span>
      <input type="email" />
    </label>
    <label>
      <span>Password</span>
      <input type="password" />
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <br><br>
    <div style="text-align:center;">
    <a class="primary-btn cta-btn">Sign In</a>
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
        <br><br><br><br><br>
      <div style="text-align:center;">
        <img src="<?=base_url("assets/img/logo_new_square.png")?>" alt="" style="object-fit: cover; height: 150px;">
      </div>
      <br><br>
      <h2>Sign Up</h2>
      <label>
        <span>Name</span>
        <input type="text" />
      </label>
      <label>
        <span>Email</span>
        <input type="email" />
      </label>
      <label>
        <span>Password</span>
        <input type="password" />
      </label>
      <br><br>
        <div style="text-align:center;">
        <a class="primary-btn cta-btn">Sign Up</a>
      </div>
    </div>
  </div>
</div>
  
    <script  src="js/index.js"></script>
    <?=$js_login?>

<div class="container" style="background:black;">
  
</div>

</body>

</html>
