<?php
session_start();
include_once 'connection.php';
date_default_timezone_set("America/New_York");
//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['submit'])) {
    $username = trim($_POST['email']);
    $password = trim($_POST['password']);
    $_SESSION['email'] = $username;

   if ($username && $password) {
       $con = "select urole from users where email = '$username' and password= '$password'";
       $urole = mysqli_query($dbc,$con);
       $role = mysqli_fetch_assoc($urole);
       $_SESSION['role'] = $role['urole'];
       $sql = "select * from users where email = '$username' and password= '$password'";
       $result = mysqli_query($dbc, $sql);
       $rows = mysqli_num_rows($result);
       if ($rows) {//0 false 1 true
           echo "log in successfully!";
           echo "
                <script>
                       setTimeout(function(){window.location.href='homepage.php';},1000);
               </script>";
       } else {
           echo "incorrect user name or password!";
           echo "
                <script>
                       setTimeout(function(){window.location.href='login.php';},1000);
                </script>

          ";
       }
   }else{
     echo "The form is incomplete!";
      echo "
                <script>
                         setTimeout(function(){window.location.href='homepage.php';},1000);
                </script>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Record</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-no-padding well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="createrecordform">
                <fieldset>
                    <legend>Sign In</legend>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" name="email" placeholder="Enter Your Email Address" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Confirm Password</label>
                        <input type="password" name="password" placeholder="Enter Your Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Sign In" class="btn btn-primary" />
                        <button type="button" class="btn btn-primary_signup" onclick="window.location.href='signup.php'">Sign Up</button>
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
</div>
<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>