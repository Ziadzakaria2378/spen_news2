<?php
session_start();

include "process.php";
include "connect.php";
include "includes/templates/header.php";

?>

<html>
<form class="login" action="signUp.php" method="POST">
    <h4 class="text-center">User Sign-Up</h4>
    <input class="form-control" type="text" name="user" placeholder="username" autocomplete="off" />
    <input class="form-control" type="password" name="pass" placeholder="password" autocomplete="new-password" />
    <input type="date" name="date" class="form-control" required="required" placeholder="">
    <input class="form-control" type="email" name="email" placeholder="Enter Your Email" autocomplete="off" />
    <input class="form-control" type="text" name="fullname" placeholder="Write the full name" autocomplete="off" />
    <input class="btn btn-primary btn-block" type="submit" value="Sign Up" name="btn" />
    <a href="index.php" style="text-decoration:none;"><input type="button" class="btn btn-success btn-block" value="Sign In" /></a>

</form>

<script src="js/script.js"></script>


</body>

</html>