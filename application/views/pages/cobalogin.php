<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <?php
        echo $css;
    ?>
</head>
<body>
    <div id="login-div" class="main-div">
        <h1>Firebase Web Login Coba</h1>
        <input type="email" placeholder="Email here" id="email_field" />
        <input type="password" placeholder="Passsword here" id="password_field"/>
        <button>Login to Account</button>
    </div>

    <div id="user-div" class="loggedin-div">
        <h3>Welcome User</h3>
        <p>Welcome to Firebase</p>
        <button>Logout</button>
    </div>
    
</body>
<?php
        echo $js;
        echo $fb;
    ?>
<script>   

    firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
        // User is signed in.
        document.getElementById("user_div").style.display = "initial";
        document.getElementById("login_div").style.display = "none";
    } else {
        // No user is signed in.
        document.getElementById("user_div").style.display = "none";
        document.getElementById("login_div").style.display = "initial";
    }
    });

    function login(){
        var userEmail = document.getElementById("email_field").value;
        var userPass = document.getElementById("password_field").value;
    }
</script>
</html>