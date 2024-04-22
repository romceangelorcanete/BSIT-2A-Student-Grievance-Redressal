<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Student Complaint System || Password Recovery</title>
    <script>
        function validateForm() {
            var newPassword = document.getElementById("new_password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            
            if (newPassword !== confirmPassword) {
                alert("New Password and Confirm Password do not match!");
                return false;
            }
            return true;
        }
    </script>
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

        <div class="form-box">
            <div class="login-container" id="login">
                <form action="reset-password.php" method="post" onsubmit="return validateForm()">
                    <div class="top">
                        <!-- <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span> -->
                        <header>Change Password</header>
                    </div>
                    <div class="input-box">
                        <input type="email" class="input-field" name="email" autocomplete="off" placeholder="Email" required>
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="old_password" autocomplete="off" placeholder="Old Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="new_password" id="new_password" autocomplete="off" placeholder="New Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" name="confirm_password" id="confirm_password" autocomplete="off" placeholder="Confirm Password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" name="change_password" value="Change Password">
                    </div>
                    <div class="two-col">
                        <div class="one">
                            <input type="checkbox" id="login-check">
                            <label for="login-check"> Remember Me</label>
                        </div>
                        <div class="two">
                        <label><a href="index.php">Log in?</a></label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
