<?php
session_start();
include_once 'connection.php';
date_default_timezone_set("America/New_York");
//set validation error flag as false
$error = false;


//check if form is submitted
if (isset($_POST['signup'])) {
    $urole = mysqli_real_escape_string($dbc, $_POST['urole']);
    $fname = mysqli_real_escape_string($dbc, $_POST['fname']);
    $lname = mysqli_real_escape_string($dbc, $_POST['lname']);
    $department_id = mysqli_real_escape_string($dbc, $_POST['department_id']);
    $email = mysqli_real_escape_string($dbc, $_POST['email']);
    $password = mysqli_real_escape_string($dbc, $_POST['password']);
    $cpassword = mysqli_real_escape_string($dbc, $_POST['cpassword']);

    $tmp = mysqli_query($dbc,"select max(UID) as uid from users");
    $row = $tmp->fetch_assoc();
    $uid = $row['uid'] + 1;

    if (!preg_match("/^[a-zA-Z ]+$/",$fname)) {
        $error = true;
        $fname_error = "Name must contain only alphabets and space";
    }
    if (!preg_match("/^[a-zA-Z ]+$/",$lname)) {
        $error = true;
        $lname_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "Password must be minimum of 6 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!$error) {
        if(mysqli_query($dbc,"INSERT INTO users VALUES($uid,'".$fname."','".$lname."','".$urole."',$department_id,'".$email."','".md5($password)."')")) {
            $successmsg = "Successfully Registered! <a href='homepage.php'>Click here to Login</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
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
                    <legend>Sign Up</legend>
                    <div class="form-group">
                        <label for="urole">Role</label>
                        <select class = "form-control" name="urole" required class="form-control">
                            <option value = "DBA">DBA</option>
                            <option value = "BA">BA</option>
                            <option value = "RESEARCHER">RESEARCHER</option>
                            <option value = "PROFESSOR">PROFESSOR</option>
                            <option value = "MANAGER">MANAGER</option>
                            <option value = "EXECUTIVE">EXECUTIVE</option>
                        </select>
                        <span class="text-danger"><?php if (isset($user_role_error)) echo $user_role_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" placeholder="Enter First Name" required value="<?php if($error) echo $fname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($fname_error)) echo $fname_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Last Name" required value="<?php if($error) echo $lname; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($lname_error)) echo $lname_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="did">Department ID</label>
                        <input type="number" name="department_id" placeholder="department id" required class="form-control" />
                        <span class="text-danger"><?php if (isset($department_id_error)) echo $department_id_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Password</label>
                        <input type="password" name="password" placeholder="Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Confirm Password</label>
                        <input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
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