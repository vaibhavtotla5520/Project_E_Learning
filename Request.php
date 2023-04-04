<?php
session_start();
include "includes/Main.php";
$callTo = new Main;

if(isset($_POST['action']) && $_POST['action'] == "signup") {
    $user_details = [
        "user_name"=> $_POST["userName"],
        "user_email"=> $_POST["userEmail"],
        "user_mobile"=> $_POST["userMobile"],
        "user_password"=> $_POST["userPassword"],
        "user_cnf_password"=> $_POST["userConfirmPassword"]
    ];
    $result = $callTo->register(json_encode($user_details));
    if($result) {
        // echo "Sign-Up Succesfull";
        header('location:dashboard/index.php');
    } else {
        echo $result;
    }
}

if(isset($_POST['action']) && $_POST['action'] == "signin") {
    // print_r($_POST);
    $user_details = [
        "user_email"=> $_POST["userEmail"],
        "user_password"=> $_POST["userPassword"]
    ];
    $result = $callTo->login(json_encode($user_details));
    if($result !== -1) {
        header('location:dashboard/index.php');
    } else {
        header('location:join-now.php?msg=Username or Password Incorrect');
    }
}