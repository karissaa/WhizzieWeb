<script>
    function loggedInCheck(){
        let user = firebase.auth().currentUser;

        if (user == null) {
            // Not Logged In
            // TODO: Do something
            alert('Something happened. Please try again in a few minutes');
        } else {
            // Sign In successful after Sign Up!
            let uid = user.uid;

            // Send XHR to set session
            let xhr = new XMLHttpRequest();
            let url = '<?=base_url('index.php/Login/login')?>';
            xhr.open("POST", url, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Redirect to Home in PHP                    
                    window.location = '<?=base_url()?>';
                }
            };

            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhr.send('uid=' + uid);
        }
    }

    document.getElementById('signUpButton').onclick = function(){
        let userEmail = document.getElementById('newUserEmail').value;
        let password = document.getElementById('newPassword').value;
        let confirmPassword = document.getElementById('confirmNewPassword').value;

        let success = true;
        
        if(password == confirmPassword){
            firebase.auth().createUserWithEmailAndPassword(userEmail, password).catch(function(error) {
                // TODO: Things to do when sign up fails
                alert('Sign Up Error!');
                console.log("Code : " + error.code);
                console.log("Message :" + error.message);
                success = false;
            }).then(function(){
                firebase.auth().signInWithEmailAndPassword(userEmail, password).catch(function(error){
                    alert('Failed to Login because the user is not yet signed up!');

                    success = false;
                }).then(function(){
                    if(success){
                        // Write to RealTime DB
                        let displayName = document.getElementById('fullName').value;
                        let uid = firebase.auth().currentUser.uid;

                        dbrf.ref('users/' + uid).set({
                            email : userEmail,
                            imgBackground : '',
                            imgProfilePicture : '',
                            name : displayName,
                            storeAddress : ''
                        });

                        loggedInCheck();
                    }                    
                });
            });
        } else {
            alert('Please match the passwords!');
        }
    };

    document.getElementById('loginButton').onclick = function(){
        // TODO: Isi element ID dari input fields
        let email = document.getElementById('loginEmail').value;     // ISI ID DARI USERNAME FIELD DI SINI        
        let password = document.getElementById('loginPass').value;     // ISI ID DARI PASSWORD FIELD DI SINI        

        let success = true;

        firebase.auth().signInWithEmailAndPassword(email, password).catch(function(error){
            alert('Login Failed! Please try again in a few minutes');
            console.log("Code : " + error.code);
            console.log("Message :" + error.message);
            success = false;
        }).then(function(){
            if(success)
                loggedInCheck();
        });
    };
</script>