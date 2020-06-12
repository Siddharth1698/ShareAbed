<?php
    session_start();

    // header('location: home.php');

    $con = mysqli_connect('localhost','root','','registration');

    $email = $_POST['email'];
    $pass1 = $_POST['password1'];

    $s = "SELECT * FROM users WHERE email='$email' AND password1 = '$pass1'";

    $result = mysqli_query($con,$s);

    $num = mysqli_num_rows($result);

    if($num==1) {
        header('location: home.php');
    } else {
        header('location: index.php');
    }
?>