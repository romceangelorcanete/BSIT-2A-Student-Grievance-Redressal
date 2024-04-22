<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <title>Submit Grievance</title>
</head>
<body>

<?php include('include/sidebar.php');?>

 <div class="wrapper">
    
<!----------------------------- Form box ----------------------------------->    
<div class="form-box-complain">
    <!------------------- Complain form -------------------------->
    <div class="complain-container" id="complain">

        <form action="include/addcomplain.php" method="post">
            <div class="top">
                <header>Submit a Grievance</header>
            </div>

            <div class="input-box-drop">
            <select name="department" id="department" class="input-field-dropdown" required>
              
            <option value="" disabled selected="selected">
                 Select a department</option>
                <option value="Faculty">Faculty</option>
                <option value="Accounting">Accounting</option>
                <option value="Registrar">Registrar</option>
                <option value="Maintenance">Maintenance</option>
                <option value="IT">IT</option>
                <option value="Portal">Student Portal</option>
                <option value="Guidance">Guidance Office</option>
                <option value="Principal">Principal's Office</option>
                <option value="Others">Others</option>
            </select>

            </div>

            <div class="input-box-drop">
            <select name="complaintype" id="complaintype" class="input-field-dropdown" required>
              
            <option value="" disabled selected="selected">
                 Select Grievance Type</option>
                <option value="Complain">Complain</option>
                <option value="Feedback">Feedback</option>
                <option value="Buillying">Bullying</option>
                <option value="Harassment">Harassment</option>
                <option value="Condition">Student Condition</option>
                <option value="Discrimination">Discrimination</option>
                <option value="Technical">Technical</option>
                <option value="Others">Others</option>
            </select>

            </div>

            <div class="input-box">
            <textarea id="details" name="details" class="input-field-complain" rows="10" cols="60" placeholder="Grievance Details" required></textarea>
            </div>

            <div class="input-box">
                <input type="submit" class="submit" name="add_complain"  value="Submit">
            </div>

        </form>
    </div>
</div>
<!-- 
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

</script> -->

</body>
</html>