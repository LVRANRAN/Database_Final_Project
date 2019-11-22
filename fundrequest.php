<?php
session_start();

//if(isset($_SESSION['admin'])) {
//    header("Location: homepage.php");
//}

include_once 'connection.php';
date_default_timezone_set("America/New_York");
//set validation error flag as false
$error = false;


//check if form is submitted
if (isset($_POST['create_project'])) {
    $project_name = mysqli_real_escape_string($dbc, $_POST['project_name']);
    $project_description = mysqli_real_escape_string($dbc, $_POST['project_description']);
    $minimum_budget = mysqli_real_escape_string($dbc, $_POST['minimum_budget']);
    $maximum_budget = mysqli_real_escape_string($dbc, $_POST['maximum_budget']);
    $end_crowd_time = mysqli_real_escape_string($dbc, $_POST['end_crowd_time']);
    $end_project_time = mysqli_real_escape_string($dbc, $_POST['end_project_time']);

    $tmp = mysqli_query($dbc, "select max(pid) as pid from Project");
    $row = $tmp->fetch_assoc();
    $pid = $row['pid'] + 1;

    if (!$error) {
            if(mysqli_query($dbc, "INSERT INTO Project VALUES($pid, '".$uid."', '".$project_name."', '".$project_description."'
            ,'".$create_time."', '".$minimum_budget."', '".$maximum_budget."', '".$end_crowd_time."', '".$end_project_time."', '".$status."')"))
            {
                $successmsg = "Successfully Registered! <a href='project.php?projectID=$pid'>Click here to View Project</a>";
        } else {
            $errormsg = "Error in registering...Please try again later!";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration Script</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" >
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- add header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Crowdfunding</a>
        </div>
        <!-- menu items -->
        <!--<div class="collapse navbar-collapse" id="navbar1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php">Login</a></li>
                <li class="active"><a href="register.php">Sign Up</a></li>
            </ul>
        </div>-->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <fieldset>
                    <legend>Create Project</legend>

                    <div class="form-group">
                        <label for="name">Project name</label>
                        <input type="text" name="project_name" placeholder="a good name is half of success" required value="<?php if($error) echo $name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($project_name_error)) echo $project_name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Project Description</label>
                        <input type="text" name="project_description" placeholder="make a good description" required value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($project_description_error)) echo $project_description_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Minimum budget</label>
                        <input type="number" name="minimum_budget" placeholder="minimum budget you need" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Maximum budget</label>
                        <input type="number" name="maximum_budget" placeholder="maximum budget you need" required class="form-control" />
                        <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Ending time for crowd funding</label>
                        <input type="datetime-local" name="end_crowd_time" placeholder="make a good description"  value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($project_description_error)) echo $project_description_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="name">Ending time for whole project</label>
                        <input type="datetime-local" name="end_project_time" placeholder="make a good description"  value="<?php if($error) echo $email; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($project_description_error)) echo $project_description_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="create_project" value="Create Project" class="btn btn-primary" />
                    </div>
                </fieldset>
            </form>
            <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
            <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
        </div>
    </div>
    <!--<div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
        Already Registered? <a href="login.php">Login Here</a>
        </div>
    </div>-->
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>