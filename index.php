<?php
session_start();
require 'includes/header.php';
require 'includes/nav.php';
require 'includes/connect.php';
?>

  <div>
    <!-- <h1>home</h1> -->
    <div class="login">
        <div class="container">
        <h1>login</h1>
        <p>No account? <a href="signup.php">SignUp</a></p>

        <!-- verify if we are logged in -->
        <?php 
          if (isset($_SESSION['id'])) {
            echo 'my name is' .$_SESSION['username'];
          }
        ?>

        <form action="includes/login.inc.php" method="POST">
          <input type="text" name="usernume" placeholder="username">
          <input type="password" name="password" placeholder="parola">
          <!-- <button type="submit" name="login" value="login">LogIn</button> -->
          <input type="submit" value="login">
        </form>
          
         

        </div>
      </div>
  </div>

</body>
</html>