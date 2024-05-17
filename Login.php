<!DOCTYPE html>
<html lang="en">

<head>
<title>Joyful Paws |Login Form</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
</head>
<head>
<link rel="icon" href="images/Paws.png">
<link rel="stylesheet" href="css/swiper.css" />
<link rel="stylesheet" href="css/bootstrap.css" />


<link rel="stylesheet" type="text/css" href="css/vendor.css">
<link rel="stylesheet" type="text/css" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
  rel="stylesheet">

    <style>

/* Flex and Display Settings */
.display-flex,
.display-flex-center,
.signup-content,
.signin-content {
  display: flex;
}

.display-flex {
  justify-content: space-between;
  align-items: center;
}

.display-flex-center {
  justify-content: center;
  align-items: center;
}

/* Lists and Links */
.list-type-ulli,
.socials {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

a:focus,
a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease;
}

a {
  color: #222;
  text-decoration: none;
}

a:hover {
  color: #eabb42;
  text-decoration: underline;
}

/* General Styling */
img {
  max-width: 100%;
  height: auto;
}

figure {
  margin: 0;
}

.main {
  background-image: url("images/background-img.png");
  background-size: cover;
  background-position: center;
  padding: 150px 0;
}

.clear {
  clear: both;
}

body {
  font-family: monospace;
  font-size: 13px;
  line-height: 1.8;
  color: #222;
  background: #f8f8f8;
  font-weight: 400;
}

.container {
  width: 100%;
  max-width: 1000px;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0 15px 17px 0.17px rgba(0, 0, 0, 0.05);
  border-radius: 20px;
}

/* Signin Form */
.signin {
  margin-top: 50px;
}

.signin-content {
  padding: 75px 0;
}

.signin-form,
.signin-image {
  width: 100%;
  overflow: hidden;
}

.signin-image {
    margin: 0 55px; 
    margin-top: 40px;

  
}

.form-title {
  margin-bottom: 33px;
  text-align: center;
  font-size: 50px;
  color: #dead6f;
}





.form-submit {

border:#DAB14A solid 1px;
background: #DAB14A;
width: 196px;
padding: 20px 0;
display: inline-block;
font-weight: 500;
font-size: 20px;
line-height: 20px;
color: #fff;
margin-left: 100px;
border-radius: 10px;}

.form-submit:hover {
  border: #F9DF9C solid 1px;
background: #F9DF9C }

.signin-image-link {
  font-size: 14px;
  color: #222;
  text-align: center;
}

.term-service {
  font-size: 13px;
  color: #222;
}

.signin-form {
  padding-left: 60px;
  padding-top: 40px;
}

/* Form Groups */
.form-group {
  position: relative;
  margin-bottom: 25px;
}
a:focus, a:active {
  text-decoration: none;
  outline: none;
  transition: all 300ms ease 0s;
  -moz-transition: all 300ms ease 0s;
  -webkit-transition: all 300ms ease 0s;
  -o-transition: all 300ms ease 0s;
  -ms-transition: all 300ms ease 0s; }
  input:focus, select:focus, textarea:focus {
  outline: none;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1); 
}
input {
  width: 100%;
  border: none;
  border-bottom: 1px solid #999;
  padding: 6px 20px;
  
}

input:focus {
  border-bottom: 1px solid #222;
}

input[type=checkbox] {
  width: 2em;
  display: none;
}

input[type=checkbox] + label > span {
  display: inline-block;
  width: 13px;
  height: 13px;
  border: 1px solid #999;
  border-radius: 2px;
}

input[type=checkbox]:checked + label > span:before {
  content: "\f26b";
  display: block;
  color: #222;
  font-size: 11px;
  text-align: center;
  font-weight: bold;
}

.agree-term {
  display: inline-block;
  width: auto;
}

/* Responsive Design */
@media screen and (max-width: 768px) {
  .signin-content {
    flex-direction: column;
    justify-content: center;
  }

  .signin-form {
    margin: 0;
    padding: 0 30px;
  }

  .signin-image {
    margin-top: 50px;
    order: 2;
  }

  .form-title {
    text-align: center;
  }
}

.error-message {
  color: red;
  font-size: 9px;
  margin-top: 5px;
}


        </style>
</head>
<body>

    <div class="main" >

       <!-- Sign in Form -->
<section class="signup" style="font-family:monospace;">
    <div class="container">
        <div class="signin-content">
            <div class="signin-form" style="font-family: monospace;">
                <h2 class="form-title" >Sign in</h2>
                <form method="POST" class="Login-form" id="Login-form" novalidate action="insert.php">
                 
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" id="email"  placeholder="Your Email"  name ='email' required>
                    </div>
                    <br>
                    <!-- Fourth row: Password -->
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="password" id="pass" placeholder="Password" required>
                    </div>
                    <br>
                    <div class="form-group form-button">
                       <input type="submit" name="Login" id="Login" class="form-submit" value="Sign in"/>
                    </div>
             
                    <p  style="margin-left: 70px;">Don't have an account ?<a href="SignUp.php" id="switch-to-login">Register here</a></p>
                </form>
            </div>
            <div class="signin-image">
                <figure><img src="images/signup-image.jpg" alt="Signup Image"/></figure>
         
            </div>
        </div>
    </div>
</section>
  
    </div>








<script>

document.addEventListener("DOMContentLoaded", function() {
  const loginForm = document.getElementById("Login-form");
  const emailField = document.getElementById("email");
  const errorMessages = {
    "empty_fields": "Please fill in all fields.",
    "incorrect_password": "The password you entered is incorrect.",
    "email_not_found": "The email you entered is not found."
  };

  const urlParams = new URLSearchParams(window.location.search);
  const error = urlParams.get("error");

  if (error && errorMessages[error]) {
    const errorMessageDiv = document.createElement("div");
    errorMessageDiv.className = "error-message";
    errorMessageDiv.textContent = errorMessages[error];
    loginForm.prepend(errorMessageDiv);

    if (emailField) {
      emailField.addEventListener("input", function() {
        errorMessageDiv.remove(); 
      });
    }
  }

  if (loginForm) {
    loginForm.addEventListener("submit", function(e) {
      const emailField = document.getElementById("email");
      const passwordField = document.getElementById("pass");

      let hasError = false;

   
      if (emailField.value.trim() === "") {
        showError(emailField, "Email field cannot be empty.");
        hasError = true;
      }

      if (passwordField.value.trim() === "") {
        showError(passwordField, "Password field cannot be empty.");
        hasError = true;
      }

      if (hasError) {
        e.preventDefault(); 
      }
    });
  }

  function showError(field, message) {
    const errorMessage = document.createElement("div");
    errorMessage.className = "error-message";
    errorMessage.textContent = message;
    field.parentElement.appendChild(errorMessage); 
  }
});

</script>










    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script> <!-- Include Bootstrap JS -->
    <!-- JS -->
    <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/swiper.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="js/iconify.js"></script>
</body>
</html>