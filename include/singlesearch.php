<?php
    // Establish database connection
    //session_start();
    include_once('connection.php');
    $trackID= $_SESSION['trackID'];
    // Prepare SQL query to fetch all users
    $sql = "SELECT * FROM complains WHERE `trackingID`='$trackID'";
    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        $trackID = $row['trackingID'];
        $status = $row['status'];
        $complaintype = $row['complaintype'];
        $details = $row['details'];
        $department = $row['department'];
        $last_update = $row['last_update'];

            $_SESSION['trackingID'] = $trackID; 
            $_SESSION['status'] = $status;
            $_SESSION['complaintype'] = $complaintype;
            $_SESSION['details'] = $details;
            $_SESSION['department'] = $department;
            $_SESSION['last_update'] = $last_update;

            //echo "<script type='text/javascript'> document.location ='track_complain.php'; </script>";
            //exit();

    } else {
        echo "<script>alert('Invalid search');</script>";
        echo "<script type='text/javascript'> document.location ='welcome.php'; </script>";
        exit();
    }

    // Close connection
    mysqli_close($conn);
?>
