<?php
session_start();
include_once('connection.php');

if (isset($_POST['register'])) {

    $email = mysqli_real_escape_string ($conn, $_POST['email']);

    $sql = "SELECT email FROM `tbl_user` WHERE `email`='$email'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    //$emailresult = $row['email'];

    $count = mysqli_num_rows($result);
        if($count == 1) {
            echo "<script>alert('Email is already existing! Try a different one.');</script>";
            // //header('location:logout.php');
            // echo "<script type='text/javascript'> document.location ='logout.php'; </script>";
            // // exit();              
        } 
        else {
            $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
            $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
            $school_id = mysqli_real_escape_string($conn, $_POST['school_id']);
            $department = mysqli_real_escape_string($conn, $_POST['department']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $pass = mysqli_real_escape_string($conn, $_POST['password']);
            $type = "Student";
        
            $sql = "INSERT INTO `tbl_user` (`first_name`, `last_name`, `school_id`, `department`, `email`, `password`, `User_Type`) 
                    VALUES ('$first_name', '$last_name', '$school_id', '$department', '$email', '$pass', '$type')";

            try {       
                $result = mysqli_query($conn, $sql);
                if($result) { 
                    echo "<script>alert('New User Registered Successfully');</script>";   
                    echo "<script type='text/javascript'> document.location ='logout.php'; </script>";
                } 
            }
            catch (Exception $e) {     
                echo '<h2>Message: ' .$e->getMessage() . '</h2>';
                // $_SESSION['$err'] = $e;
                // header('location:index.php');
            }

         }
        }
        mysqli_close($conn);


?>