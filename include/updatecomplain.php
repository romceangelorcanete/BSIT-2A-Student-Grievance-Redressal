<?php
session_start();
include_once('connection.php');
date_default_timezone_set('Asia/Singapore');

if($_POST['modify_complain'] == "Cancel") {

    $trackID = mysqli_real_escape_string($conn, $_POST['trackingID']);
    $status = "Cancelled";
    $email = mysqli_real_escape_string($conn, $_SESSION['email']);
    $updates = mysqli_real_escape_string($conn, $_POST['updates']);

    $sql = "UPDATE `complains` SET `status` = '$status',`last_update` = CURRENT_TIMESTAMP WHERE `trackingID` ='$trackID'";
    $sql2 = "INSERT INTO `updates`(`trackingID`, `status`, `updates`, `updated_by`, `last_update`) VALUES
             ('$trackID', '$status', '$updates', '$email', CURRENT_TIMESTAMP)";

    // echo $sql;
    // echo "<br>";
    // echo $sql2;

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    if($result) { 
        echo "<script>alert('Grievance has been Cancelled Successfully');</script>"; 
        echo "<script type='text/javascript'> document.location ='/cpy1/trackhandler_complain.php'; </script>";
    } else {    
        die(mysqli_error($conn));
    }
}

elseif($_POST['modify_complain'] == "Save") {
    //echo "Save";

    $trackID = mysqli_real_escape_string($conn, $_POST['trackingID']);
    $email = mysqli_real_escape_string($conn, $_SESSION['email']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $type = mysqli_real_escape_string($conn, $_POST['complaintype']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $updates = mysqli_real_escape_string($conn, $_POST['updates']);

    $sql = "UPDATE `complains` SET `status` = '$status',`department` ='$department', `complaintype` = '$type',
            `details` = '$details', `last_update` = CURRENT_TIMESTAMP WHERE `trackingID` ='$trackID'";
    $sql2 = "INSERT INTO `updates`(`trackingID`, `status`, `updates`, `updated_by`, `last_update`) VALUES
             ('$trackID', '$status', '$updates', '$email', CURRENT_TIMESTAMP)";

    // echo $sql;
    // echo "<br>";
    // echo $sql2;

    $result = mysqli_query($conn, $sql);
    $result2 = mysqli_query($conn, $sql2);

    if($result) { 
        echo "<script>alert('Grievance has been Updated Successfully');</script>"; 
        echo "<script type='text/javascript'> document.location ='/cpy1/trackhandler_complain.php'; </script>";
    } else {    
        die(mysqli_error($conn));
    }

}

mysqli_close($conn);


?>