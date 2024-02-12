<?php
include 'config.php';
if (isset($_POST['submit'])) {
    # code...
    $fullname=mysqli_real_escape_string($con,$_POST['Fullname']);
    $userid=mysqli_real_escape_string($con,$_POST['UserId']);
    $email=mysqli_real_escape_string($con,$_POST['Email']);
    $password=mysqli_real_escape_string($con,$_POST['psw']);
    $cpassword=mysqli_real_escape_string($con,$_POST['confirm_password']);
    $role=mysqli_real_escape_string($con,$_POST['Role']);
    $degree=mysqli_real_escape_string($con,$_POST['Degree']);

    $select_user= mysqi_query($con,"SELECT * FROM 'user' WHERE userid = '$userid' AND password = '$password'") or die('query failed');

    if (mysqli_num_rows($select_user)>0) {
        # code...
        $message[]='user already exists';
    }else {
        mysqli_query($con,"INSERT INTO 'user'(fullname,userid,email,pass,cpassword,role,degree) VALUES ('$fullname','$userid','$email','$password','$cpassword','$role','$degree')");
        $message[]='Regisetr success';

    }
}

?>