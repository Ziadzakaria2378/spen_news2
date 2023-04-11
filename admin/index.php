<?php
session_start();
$noNavbar = '';
$pagetitle = 'Login';
if (isset($_SESSION['name'])) {

      header('location: home.php');  //redirect to dashboard page
}
include("init.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

      $username = $_POST['user'];
      $password = $_POST['pass'];
      $hashedpass = sha1($password);
      // check if user exist in database

      $stmt = $con->prepare("SELECT
                                    user_id ,  name , password 
                              FROM  
                                    user 
                              WHERE
                                    name = ? 
                              AND 
                                    password =?
                              AND
                                    GroupID=1
                              LIMIT 1");

      $stmt->execute(array($username,  $hashedpass));
      $row = $stmt->fetch();
      $count = $stmt->rowcount();


      if ($count > 0) {
            $_SESSION['name'] = $username; //register session name
            $_SESSION['ID'] = $row['user_id']; //register session ID
            header('location:home.php');  //redirect to dashboard page
            exit();
      }
}
?>




<div class="login">
	<h1 class="p-2" >Login</h1>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="user" placeholder="Username" required="required" autocomplete="fulse"  />
            <input type="password" name="pass" placeholder="Password" required="required"  autocomplete="new-password"/>
            <button type="submit" class="btn btn-primary btn-block btn-large">login</button>
      </form>
</div>

<?php include($tpl . 'footer.php'); ?>