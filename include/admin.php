<?php
session_start();
error_reporting(0);
include_once('connection.php');
if(isset($_SESSION['last_name']) && isset($_SESSION['email'] )){
}
// $_SESSION['last_name'];
// $_SESSION['email'];
// if(!isset($_SESSION['id'])){}
  // header('location:welcome.php');
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="card/style.css">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <aside class="sidebar">
      <div class="logo">
        <img src="images/DYCI_Logo.png" alt="logo">
        <h2>Student Comlpaint System</h2>
      </div>
      <ul class="links">
      <h8>Welcome,
        <span><?=$_SESSION['last_name'];?></span></h8>
        <h4>Main Menu</h4>
        <li>
          <span class="material-symbols-outlined">dashboard</span>
          <a href="dashboard_cards.php" onclick="openDashboard()">Dashboard</a>
        </li>
        <h4>Report</h4>
        <li>
          <span class="material-symbols-outlined">show_chart</span>
          <a href="#" onclick="openHistory()">View Grievance</a>
        </li>
        <!-- <li>
          <span class="material-symbols-outlined">flag</span>
          <a href="#">Manage Students</a>
        </li> -->
        <hr>
        <h4>Manage Students</h4>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a href="#">Remove Student</a>
        </li>
        <!-- <li>
          <span class="material-symbols-outlined">group</span>
          <a href="#">Track Grievance </a>
        </li> -->
        <!-- <li>
          <span class="material-symbols-outlined">ambient_screen</span>
          <a href="#">Magic Build</a>
        </li>
        <li>
          <span class="material-symbols-outlined">pacemaker</span>
          <a href="#">Theme Maker</a>
        </li>
        <li>
          <span class="material-symbols-outlined">monitoring</span>
          <a href="#">Analytic</a>
        </li> -->
        <hr>
        <h4>Manage Handler</h4>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Add Handler</a>
        </li>
        <li>
          <span class="material-symbols-outlined">mail</span>
          <a href="#">Remove Handler</a>
        </li>
        <h4>Reports</h4>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Submitted Grievance</a>
        </li>
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Grievance Solution</a>
        </li>

        <!-- parang student user -->
        <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">List of Users</a>
        </li>
        <li>
        <li class="logout-link">
          <span class="material-symbols-outlined">logout</span>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
    </aside>
    <!-- <div class="center">
        <div class="content" id="dashboard">
            <h2>Dashboard Page</h2> -->
            <!-- Dashboard content goes here -->
            <!-- <p>Welcome to the dashboard!</p>
        </div> -->

        <!-- <div class="content" id="history" style="display:none;">
            <h2>History Page</h2> -->
            <!-- History content goes here -->
            <!-- <p>Welcome to the history page!</p>
        </div>
    </div>
  <div class="content" id="settings" style="display:none;">
    <h2>Settings Page</h2> -->
    <!-- Settings content goes here -->
    <!-- <p>Welcome to the settings page!</p>
</div> -->

<!-- <div class="content" id="reports" style="display:none;">
    <h2>Reports Page</h2> -->
    <!-- Reports content goes here -->
    <!-- <p>Welcome to the reports page!</p>
</div> -->

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

<!-- <script>
function openDashboard() {
    var dashboard = document.getElementById('dashboard');
    var history = document.getElementById('history');
    dashboard.style.display = 'block';
    history.style.display = 'none';
}

function openHistory() {
    var dashboard = document.getElementById('dashboard');
    var history = document.getElementById('history');
    dashboard.style.display = 'none';
    history.style.display = 'block';
}
</script> -->


  </body>
</html>




<!-- <!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title> -->
  <!-- Required meta tags -->
  <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->

  <!-- Bootstrap CSS v5.2.1 -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"> -->
<!-- <style>
    .container{
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      
    }.container span{
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }.container p{
        margin: 20px;
    }.container .btn{
        margin-top: -30px;
        width: 150px;
        background-color: gold;
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
    }.container .btn:hover{
        margin-top: -30px;
        width:200px;
        background-color: darkorange;
        font-weight: 500;
        transition: 1s;
        color: white;
    }
</style> -->
<!-- </head>

<body> -->
 





  <!-- Bootstrap JavaScript Libraries -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" -->
    <!-- integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"> -->
  <!-- </script> -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" -->
    <!-- integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"> -->
  <!-- </script> -->
<!-- </body> -->

<!-- </html> -->