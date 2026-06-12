<?php
session_start();
require_once 'config.php';

// logic for the sign up
if (isset($_POST['register'])) {
    $username = $_POST['username']; 
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = 'user'; // default to standard users 

    $check_email = $con->query("SELECT email FROM users WHERE email = '$email'");
    
    if ($check_email->num_rows > 0) {
        echo "<script>alert('Email is already registered!'); window.location.href='signup.php';</script>";
    } else {
        $con->query("INSERT INTO users (name, email, password, role) VALUES ('$username', '$email', '$password', '$role')");
        echo "<script>alert('Registration successful! Please login.'); window.location.href='login.php';</script>";
    }
    exit();
}

// logic for the logins
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $con->query("SELECT * FROM users WHERE email = '$email'");
    
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        if (password_verify($password, $user['password'])) {
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            
            if ($user['role'] == 'admin') {
                header("Location: admin_page.php");
            } else {
                header("Location: index.html");
            }
            exit();
        }
    }
    
    echo "<script>alert('Incorrect email or password!'); window.location.href='login.php';</script>";
    exit();
}
?>
