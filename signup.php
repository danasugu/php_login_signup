<?php
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<div class="login">
        <div class="container">
        <h1>signup</h1>
        <p>Already have an account? <a href="login.php">LogIn</a></p>
          <form action="includes/signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="name">
            <input type="text" name="surname" placeholder="surname">
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <!-- <button type="submit" name="login" value="login">LogIn</button> -->
            <input type="submit" value="signup">
          </form>
              <?php 
                  if (isset($_GET['info']) && $_GET['info'] == 'ok') {
                    echo '<p style="font-size:33px;color:green;">Successful signup</p>';
                  } elseif  (isset($_GET['info']) && $_GET['info'] == 'error') {
                    echo '<p style="font-size:33px;color:red;">Fill up all the fields!</p>';
                  }elseif  (isset($_GET['info']) && $_GET['info'] == 'exists') {
                    echo '<p style="font-size:33px;color:red;">Username already exists!</p>';
                  }  
              ?>
        </div>

      </div>