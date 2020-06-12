<?php
    session_start();
    
    header('location: index.php');

    $con = mysqli_connect('localhost', 'root', '', 'registration');

    

    // mysqli_select_db($con, 'shareabed');

    $email = $_POST['email'];
    $pass1 = $_POST['password1'];
    $password = $_POST['password2'];
    $name = $_POST['fname'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $house = $_POST['house'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $pin = $_POST['pin'];

    $reg =  "INSERT INTO `registration`.`users` (email,password1,name1,phonenumber,dob,house,district,state1,pincode) VALUES ('$email','$pass1','$name','$phone','$dob','$house','$district','$state','$pin')";

    mysqli_query($con, $reg);

    echo "Registration Successfull";
