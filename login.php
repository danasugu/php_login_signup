<?php
require_once 'includes/header.php';
require_once 'includes/nav.php';
?>

<div class="login">
        <div class="container">
        <h1>login</h1>
        <p>No account? <a href="signup.php">SignUp</a></p>
        <form action="includes/login.inc.php" method="POST">
          <input type="text" name="usernume" placeholder="username">
          <input type="password" name="password" placeholder="parola">
          <!-- <button type="submit" name="login" value="login">LogIn</button> -->
          <input type="submit" value="login">
        </form>
        </div>

      </div>