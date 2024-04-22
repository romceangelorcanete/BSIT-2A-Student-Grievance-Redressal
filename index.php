<?php 
    session_start();
    error_reporting(0);
     if(isset($_SESSION['last_name']) && isset($_SESSION['email'])){
        header("Location: welcome.php");
      }
     ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Welcome to Student Complaint System</title>
</head>
<body>
 <div class="wrapper">
    <nav class="nav">
        <div class="nav-logo">
            <img src="images\Student Complaint System (3).png" alt="DYCI_Logo">

        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="web.html" class="link active">Home</a></li>
                <!-- <li><a href="index.php" class="link">Student</a></li>
                <li><a href="handler.php" class="link">Handler</a></li>
                <li><a href="admin.php" class="link">Admin</a></li> -->
                <!-- <li><a href="#" class="link">About</a></li> -->
            </ul>
        </div> 
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenuFunction()"></i>
        </div>
    </nav>

<!----------------------------- Form box ----------------------------------->    
<div class="form-box">
    <!------------------- login form -------------------------->
    <div class="login-container" id="login">
        <form action="login.php" method="post">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Log in</header>
            </div>
            <div class="input-box">
                <input type="" class="input-field" name="email" autocomplete="on" placeholder="Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" autocomplete="off" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" name="login"  value="Sign In">
            </div>
            <!-- <div class="popup" id="popup">
                <img src="images/tick.png" style="width: 100px; margin-top: -50px; border-radius: 50%; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);">
                <h2>You are already logged in.</h2>
                <button type="button">OK</button>
            </div> -->
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check"> Remember Me</label>
                </div>
                <div class="two">
                    <label><a href="reset_password.php">Forgot password?</a></label>
                </div>
            </div>
        </form>
    </div>

        <!------------------- registration form -------------------------->
        <div class="register-container" id="register">
            <form action="add.php" method="post"> 
                <div class="top">
                    <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                    <header>Create new account</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" name="first_name" autocomplete="off" placeholder="First Name">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" name="last_name" autocomplete="off" placeholder="Last Name">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <select class="input-field" id="department" type="text" name="department">
                        <option value="" disabled selected>Select Department</option>
                        <!-- <option value="High School">High School</option> -->
                        <option value="Senior High School">Senior High School</option>
                        <option value="Junior High School">Junior High School</option>
                        <option value="College">College</option>
                    </select>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="school_id" autocomplete="off" placeholder="School ID">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" name="email" autocomplete="off" placeholder="Email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" autocomplete="off" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="register" value="Sign up">
            </div>
        </form>
    </div>
</div>

<script>
   
   function myMenuFunction() {
    var i = document.getElementById("navMenu");

    if(i.className === "nav-menu") {
        i.className += " responsive";
    } else {
        i.className = "nav-menu";
    }
   }
 
</script>

<script>

    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }

</script>

</body>
</html>