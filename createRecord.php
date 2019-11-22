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
if (isset($_POST['create_record'])) {
    $patient_id = mysqli_real_escape_string($dbc, $_POST['patient_id']);
    $patient_name = mysqli_real_escape_string($dbc, $_POST['patient_name']);
    $treatment_date = mysqli_real_escape_string($dbc, $_POST['treatment_date']);
    $treatment_frequency = mysqli_real_escape_string($dbc, $_POST['treatment_frequency']);
    $treatment_status = mysqli_real_escape_string($dbc, $_POST['treatment_status']);
    $treatment_id = mysqli_real_escape_string($dbc, $_POST['treatment_id']);
    $physician_id = mysqli_real_escape_string($dbc, $_POST['physician_id']);

//    $uid = $_GET["userid"];
 //   $uid = 'lulu@gmail.com';
  //  $create_time = date("Y-m-d H:i:s");
  //  $status = 'fund_processing';
    //if (!$error) {
    //    if(mysqli_query($dbc, "INSERT INTO patient_treatment VALUES($treatment_date,$treatment_frequency,$treatment_status,$physician_id,$patient_id,$treatment_id)"))
    //    {
    //        $successmsg = "Successfully Registered! <a href='project.php?projectID=$pid'>Click here to View Project</a>";
    //    } else {
    //        $errormsg = "Error in registering...Please try again later!";
    //    }
   // }
    if(!$error) {
        $sql ="INSERT INTO patient_treatment VALUES($treatment_date,'".$treatment_frequency."','".$treatment_status."','".$physician_id."','".$patient_id."','".$treatment_id."')";
        mysqli_query($dbc, $sql);
        if($dbc->query($sql) == TRUE){
            $successmsg =  "New record inserted successfully!";
        } else {
            $errormsg =  "Error in creating record, please check what you have entered!";
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
            <a class="navbar-brand" href="homepage.php">Crowdfunding</a>
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
        <div class="col-md-4 col-md-offset-4 col-no-padding well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="createrecordform">
                <fieldset>
                    <legend>Create Record</legend>
                    <div class="form-group">
                        <label for="pid">Patient ID</label>
                        <input type="number" name="patient_id" placeholder="Patient ID" required value="<?php if($error) echo $patient_id; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($patient_id_error)) echo $patient_id_error; ?></span>
                    </div>
                    <div class="form-group">
                            <label for="pname">Patient Name</label>
                            <input type="text" name="patient_name" placeholder="Full Name" required value="<?php if($error) echo $patient_name; ?>" class="form-control" />
                            <span class="text-danger"><?php if (isset($patient_name_error)) echo $patient_name_error; ?></span>
                    </div>


                    <div class="form-group">
                        <label for="tdate">Treatment Time</label>
                        <input type="datetime-local" name="treatment_date" placeholder="enter the treatment date"  value="<?php if($error) echo $treatment_date; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($treatment_date_error)) echo $treatment_date_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="tfreq">treatment frequency</label>
                        <input type="number" name="treatment_frequency" placeholder="total treatment frequency" required class="form-control" />
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="tstatus">Treatment Status</label>
                        <select class = "form-control" name="treatment_status" required class="form-control">
                            <option value = "S">S</option>
                            <option value = "F">F</option>
                            <option value = "R">R</option>
                        </select>
                        <span class="text-danger"><?php if (isset($treatment_status_error)) echo $treatment_status_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="tid">Treatment ID</label>
                        <input type="number" name="treatment_id" placeholder="treatment id" required class="form-control" />
                        <span class="text-danger"><?php if (isset($treatment_id_error)) echo $treatment_id_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="phid">Physician ID</label>
                        <input type="number" name="physician_id" placeholder="physician id" required class="form-control" />
                        <span class="text-danger"><?php if (isset($physician_id_error)) echo $physician_id_error; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="create_record" value="Create Record" class="btn btn-primary" />
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
<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>