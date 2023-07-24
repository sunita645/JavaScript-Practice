<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    if (empty($username)){
        echo "username is empty";
    }
    else{
        echo $username;
    }

    $email = $_POST['Email'];
    if (empty($Email)){
        echo "email is empty";
    }
    else{
        echo $email;
    }

    $password = $_POST['Password'];
    if(empty($Password)){
        echo "Password is empty";
    }
    else{
        echo $Password;
    }

    $ConfirmPassword = $_POST['ConfirmPassword'];
    if(empty($ConfirmPassword)){
        echo "Password didnot match";
    }
    else{
        echo $ConfirmPassword;
    }

}
?>