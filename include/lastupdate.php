<?php
    // Establish database connection
    //session_start();
    include_once('connection.php');
    //session_start();
    //error_reporting(0);
    $trackID= $_SESSION['trackID'];

    // Prepare SQL query to fetch all users
    $sql = "SELECT * FROM updates WHERE `trackingID`='$trackID' order by last_update desc limit 1";
    $result = mysqli_query($conn, $sql);

    $count = 0; 
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_array($result);
        $updates = $row['updates'];

            $_SESSION['updates'] = $updates;


            //echo "<script type='text/javascript'> document.location ='track_complain.php'; </script>";
            //exit();

    } else {
        echo "<script>alert('Empty search');</script>";
        //echo "<script type='text/javascript'> document.location ='welcome.php'; </script>";
       // exit();
    }

    // Close connection
    mysqli_close($conn);
?>
