<?php
    require_once 'process.php';
    
?>
<!DOCTYPE html>
<html>
  <head>
    <title>User-login</title>
    <link rel="stylesheet" href="form-style.css" type="text/css" />
  </head>
  <body>
    <form action="process.php" method="POST">
      <div class="container">
        <h1>Login</h1>
        <br />
        <div class="text-box">
          <i class="fa fa-user" aria-hidden="true"></i>
          <input
            type="email"
            placeholder="e-mail"
            name="email"
            required
          /><br />
        </div>
        <div class="text-box1">
          <i class="fa fa-lock" aria-hidden="true"></i>
          <input
            type="password"
            placeholder="Password"
            name="password"
            mini="5"
            required
          /><br />
        </div>
        <div class="bottom-box">
          <!-- <input type="submit" name="" value="Sign in"> -->
          <input type="submit" value="Sign in" />
          <input type="reset" />
        </div>
      </div>
    </form>
  </body>
</html>
