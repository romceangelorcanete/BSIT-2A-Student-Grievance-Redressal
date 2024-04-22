<?php
session_start();
include("connection.php");

if(isset($_POST['change_password'])) {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    // Validate input
    if(empty($email) || empty($new_password)) {
        echo "<script>alert('Please provide both email and new password.');</script>";
        exit;
    }

    // Hash the new password using bcrypt
    // $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Check if the email exists in the database using prepared statement
    $stmt = $conn->prepare("SELECT id FROM tbl_user WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        // Update the password in the database using prepared statement
        $update_stmt = $conn->prepare("UPDATE tbl_user SET password=? WHERE email=?");
        $update_stmt->bind_param("ss", $new_password, $email);
        if($update_stmt->execute()) {
            echo "<script>alert('Your password has been successfully changed.');</script>";
            echo "<script type='text/javascript'> document.location ='index.php'; </script>";
            exit;
        } else {
            echo "<script>alert('Error: Unable to update password.');</script>"; 
        }
    } else {
        echo "<script>alert('Invalid email address. Please check your email and try again.');</script>"; 
    }
}
?>
