<?php
session_start();
require('../../config.php');
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$password = mysqli_real_escape_string($conn, trim($_POST['password']));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format"; 
    echo $emailErr;
}
else{
    $query = "SELECT * FROM user WHERE email='$email'";
    $checkemail = $conn->query($query);
    if($checkemail->num_rows == 0){
        echo "This email does not exit";
    }
    else{
        $query = "SELECT * FROM user WHERE email='$email' and password='$password'";
        $checkemail = $conn->query($query);
        if($checkemail->num_rows ==1){
            while($result = $checkemail->fetch_assoc()){
            $_SESSION['ajaypillai'] = 1;
            echo "success";
            }
        }
        else{
            echo "Email and Password Do Not Match";
        }
    }
}

?>