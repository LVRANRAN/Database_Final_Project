<?php
session_start();

include_once 'connection.php';
date_default_timezone_set("America/New_York");
//set validation error flag as false
$error = false;


//check if form is submitted
if (isset($_POST['create_disease'])) {
    $disease_name = mysqli_real_escape_string($dbc, $_POST['disease_name']);

    $tmp = mysqli_query($dbc, "select max(deid) as deid from disease");
    $row = $tmp->fetch_assoc();
    $deid = $row['deid'] + 1;
    // $tdate = $_GET["tdate"];
    // $pid = $_GET["pid"];

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
        $sql ="INSERT INTO disease VALUES($deid,'".$disease_name."')";
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

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-no-padding well">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="createrecordform">
                <fieldset>
                    <legend>Create Record</legend>
                    <div class="form-group">
                        <label for="dename">Disease Name</label>
                        <input type="text" name="disease_name" placeholder="Full Name" required value="<?php if($error) echo $disease_name; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($patient_name_error)) echo $patient_name_error; ?></span>
                    </div
                    <div class="form-group">
                        <input type="submit" name="create_disease" value="Create Disease" class="btn btn-primary" />
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