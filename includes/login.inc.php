<?php
session_start();
require 'header.php';
require 'nav.php';
require 'connect.php';

if (isset($_POST['username']) 
    && !empty($_POST['username']) 
    && isset($_POST['password']) 
    && !empty($_POST['password'])) {

      $username = strtolower($_POST['username']);
      $password = $_POST['password'];

      $sql = "SELECT * FROM users WHERE username='$username'";
      $result = mysqli_query($connect, $sql);

      $row = $result->fetch_assoc();
      $hash = $row['password'];


      $check = password_verify($password, $hash);

      if ($check == 0) {
        header("Location: ../index.php?info=wrongpass");
        die();
      }else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
        $result = mysqli_query($connect, $sql);

        if (!$row = $result->fetch_assoc()) {
          echo 'wrong password!';
        }else {
          $_SESSION['id'] = $row['id'];
          $_SESSION['name'] = $row['name'];
          $_SESSION['surname'] = $row['surname'];
          $_SESSION['username'] = $row['username'];
        }
          header("Location: ../index.php");
      }
}

