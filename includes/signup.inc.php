<?php
session_start();
require 'header.php';
require 'nav.php';
require_once 'connect.php';

if (!empty($_POST['name']) && 
    !empty($_POST['surname']) && 
    !empty($_POST['username']) && 
    !empty($_POST['password']) && 
    isset($_POST['name']) && 
    isset($_POST['surname']) && 
    isset($_POST['username']) && 
    isset($_POST['password'])) {
        
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $sql = "SELECT username FROM users WHERE username='$username'";
        $result = mysqli_query($connect, $sql);
        $check = mysqli_num_rows($result);

        if($check > 0 ) {
          header("Location: ../signup.php?info=exists");
          die();
        }else {
            $sql = "INSERT INTO users (name, surname, username, password) VALUES('$name', '$surname','$username', '$password_hashed')";

            $result = mysqli_query($connect, $sql);

            header("Location: ../signup.php?info=ok");
        }
        }else{
              header("Location: ../signup.php?info=error");
        }

