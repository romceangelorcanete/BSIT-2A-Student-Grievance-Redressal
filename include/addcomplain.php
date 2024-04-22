<?php
session_start();
include_once('connection.php');


if(isset($_POST['add_complain'])) {
    date_default_timezone_set('Asia/Singapore');

    $trackID = mysqli_real_escape_string($conn, date("Ymdhis"));
    $email = mysqli_real_escape_string($conn, $_SESSION['email']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $type = mysqli_real_escape_string($conn, $_POST['complaintype']);
    $details = mysqli_real_escape_string($conn, $_POST['details']);
    $status = "Submitted";

    $sql = "INSERT INTO `complains` (`trackingID`, `details`, `status`, `email`, `department`, `complaintype`) 
            VALUES ('$trackID', '$details', '$status', '$email', '$department', '$type')";

    //echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result) { 
        echo "<script>alert('Grievance has been Submitted Successfully');</script>"; 
        echo "<script type='text/javascript'> document.location ='/cpy1/welcome.php'; </script>";
    } else {    
        die(mysqli_error($conn));
    }
}
mysqli_close($conn);


?>