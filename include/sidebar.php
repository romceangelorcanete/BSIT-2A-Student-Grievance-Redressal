
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

    
<aside class="sidebar">
    <div class="logo">
        <img src="images/DYCI_Logo.png" alt="logo">
        <h2>Student Complaint System</h2>
    </div>
    <?php 
    // Start session and include connection file
    session_start();
    include_once('connection.php');
    // Retrieve user information based on the user ID
    $id = intval($_SESSION["id"]);
    $query = mysqli_query($conn, "SELECT * FROM tbl_user WHERE id='$id'");
    while ($row = mysqli_fetch_array($query)) {
    ?>

<aside class="sidebar">
      <div class="logo">
        <img src="images/DYCI_Logo.png" alt="logo">
        <h2>Student Complaint System</h2>
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
          <a href="#" onclick="openHistory()">Submitted Grievance</a>
        </li>
        <li>
          <span class="material-symbols-outlined">flag</span>
          <a href="#">Status Report</a>
        </li>
        <hr>
        <h4>Grievance</h4>
        <li>
          <span class="material-symbols-outlined">person</span>
          <a href="complain.php">Submit Grievance</a>
        </li>
        <li>
          <span class="material-symbols-outlined">group</span>
          <a href="track_complain.php">Track Grievance </a>
        </li>
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
        <h4>Account</h4>
        <!-- <li>
          <span class="material-symbols-outlined">bar_chart</span>
          <a href="#">Overview</a>
        </li>
        <li>
          <span class="material-symbols-outlined">mail</span>
          <a href="#">Message</a>
        </li> -->
        <li>
          <span class="material-symbols-outlined">settings</span>
          <a href="#">Settings</a>
        </li>
        <li class="logout-link">
          <span class="material-symbols-outlined">logout</span>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
    </aside>

    <!-- <ul class="links">
        <h8>Welcome, <span><?php echo htmlentities($row['last_name']);?></span></h8>
        <h4>Main Menu</h4>
        <li>
            <span class="material-symbols-outlined">dashboard</span>
            <a href="dashboard_cards.php" onclick="openDashboard()">Dashboard</a>
        </li>
        <li>
            <span class="material-symbols-outlined">show_chart</span>
            <a href="#" onclick="openHistory()">History</a>
        </li>
        <li>
            <span class="material-symbols-outlined">flag</span>
            <a href="#">Reports</a>
        </li>
        <hr>
        <h4>Advanced</h4>
        <li>
            <span class="material-symbols-outlined">person</span>
            <a href="#">Designer</a>
        </li>
        <li>
            <span class="material-symbols-outlined">group</span>
            <a href="#">Developer</a>
        </li>
        <li>
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
        </li>
        <hr>
        <h4>Account</h4>
        <li>
            <span class="material-symbols-outlined">settings</span>
            <a href="#">Settings</a>
        </li>
        <li class="logout-link">
            <span class="material-symbols-outlined">logout</span>
            <a href="index.php">Logout</a>
        </li>
    </ul> -->
    <?php } ?>
</aside>
