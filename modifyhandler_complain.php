<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Linking Google font link for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">

    <title>Update Grievance</title>
</head>
<body>



<?php include('include/handler.php');
// Check if the POST request contains the cellValue parameter
if(isset($_POST['trackID'])) {
    // Retrieve the cell value from the POST data
    $cellValue = $_POST['trackID'];
    $_SESSION['trackID'] = $cellValue;
    // Process the value (You can perform any desired operations here)
    echo "Received cell value: " . $cellValue;
    //$_SESSION['trackID'] = $cellValue;
} else {
    // If the cellValue parameter is not set, return an error message
    //echo "Error: No cell value received";
}

?>
<?php include_once('include/singlesearch.php');
//include('include/lastupdate.php');

// echo $_SESSION['trackingID'] . "<br>"; 
// echo $_SESSION['status'] . "<br>";
// echo $_SESSION['complaintype'] . "<br>";
// echo $_SESSION['details'] . "<br>";
// echo $_SESSION['department'] . "<br>";
// echo $_SESSION['last_update'] . "<br>";
// //echo $_SESSION['updates'] . "<br>";

    // Establish database connection
    //session_start();
    include_once('connection.php');
    //session_start();
    //error_reporting(0);
    $trackID= $_SESSION['trackingID'];

    // Prepare SQL query to fetch all users
    $sql = "SELECT * FROM updates WHERE `trackingID`='$trackID' order by last_update desc limit 1";
    $result = mysqli_query($conn, $sql);

    $_SESSION['updates'] = "";
    $count = 0; 
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_array($result);
        $updatesvalue = $row['updates'];
            $_SESSION['updates'] = $updatesvalue;

    } else {
        echo "<script>alert('No recent updates');</script>";
        //echo "<script type='text/javascript'> document.location ='welcome.php'; </script>";
    }

    // Close connection
    mysqli_close($conn);

?>


<div class="wrapper">
<div class="modify-complain-h">
<!----------------------------- Form box ----------------------------------->    
<div class="form-box-modifycomplain">
    <!------------------- Modify form -------------------------->
    <div class="modify-container" id="modify">
            <form action="include/updatecomplain.php" method="post" > 
                <div class="top">
                    <header>Update Grievance</header>
                </div>

                <div class="two-forms">

                <div class="input-box">

                <div class="two-forms-modify">
                    <div class="input-box-label-h">
                        <label> Tracking ID </label>
                    </div>
                    <div class="input-box-modify">
                        <input type="text" class="input-field-dropdown" id="trackingID" name="trackingID" autocomplete="off" value="<?php echo $_SESSION['trackingID'] ?>" readonly >
                    </div>
                </div>



                <div class="two-forms-modify">
                    <div class="input-box-label-h">
                        <label> Status </label>
                    </div>

                    <div class="input-box-modify">
                        <select name="status" id="status" class="input-field-dropdown" required >
                        <option value="<?php echo $_SESSION['status'] ?>" selected="selected"><?php echo $_SESSION['status'] ?></option>
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                            <option value="Cancelled">Cancelled</option>
                        </select>

                    </div>

                </div>

                <div class="two-forms-modify">
                    <div class="input-box-label-h">
                        <label> Department </label>
                    </div>
                    
                    <div class="input-box-modify">
                    <input type="text" class="input-field-dropdown" id="department" name="department" autocomplete="off" value="<?php echo $_SESSION['department'] ?>" readonly>

                    </div>

                </div>

                <div class="two-forms-modify">
                    <div class="input-box-label-h">
                        <label> Type </label>
                    </div>

                    <div class="input-box-modify">
                    <select name="complaintype" id="complaintype" class="input-field-dropdown" required>
                    
                    <option value="<?php echo $_SESSION['complaintype'] ?>" selected="selected"><?php echo $_SESSION['complaintype'] ?></option>
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

                </div>

                </div>

            <div class="input-box">
            <textarea id="details" name="details" class="input-field-complain" rows="10" cols="60" placeholder="Grievance Details" readonly><?php echo $_SESSION['details'] ?></textarea>
            </div>

            </div>

            <div class="input-box">
                <h3><label>LAST UPDATE/SOLUTION: </label></h3>
            <textarea id="updates" name="updates" class="input-field-complain" rows="8" cols="60" placeholder="Enter Update/Resolution Here..." required><?php echo $_SESSION['updates'];?></textarea>
            </div>

            <div class="two-forms">               
                <div class="nav-button">
                    <a href="trackhandler_complain.php" class="btn white-btn" onclick="return confirm('Are you sure you want to cancel changes?');">Back</a>
                </div>

                <div class="nav-button">
                    <input type="submit" class="btn white-btn" name="modify_complain" value="Cancel" onclick="return confirm('Cancel Grievance Ticket?');">
                </div>

                <div class="nav-button">
                    <input type="submit" class="btn white-btn" name="modify_complain" value="Save" onclick="return confirm('Are you sure you want to Save?');">
                </div>
            </div>
           
        </form>
    </div>
    
</div>
    </div>   
</div>

<!-- <script>
    var x = document.getElementById("complain");
    var y = document.getElementById("modify");

    function complain() {
        x.style.left = "4px";
        y.style.right = "-520px";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function modify() {
        x.style.left = "-1000px";
        y.style.right = "5px";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
 
</script>  -->



</body>
</html>