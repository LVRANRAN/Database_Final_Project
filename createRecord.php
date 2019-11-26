<?php
session_start();

include_once 'connection.php';
date_default_timezone_set("America/New_York");
//set validation error flag as false
$error = false;


//check if form is submitted
if (isset($_POST['create_record'])) {
    $patient_id = mysqli_real_escape_string($dbc, $_POST['patient_id']);
    $treatment_date = mysqli_real_escape_string($dbc, $_POST['treatment_date']);
    $create_time = date("Y-m-d H:i:s");
    $treatment_frequency = mysqli_real_escape_string($dbc, $_POST['treatment_frequency']);
    $treatment_status = mysqli_real_escape_string($dbc, $_POST['treatment_status']);
    $treatment_id = mysqli_real_escape_string($dbc, $_POST['treatment_id']);
    $physician_id = mysqli_real_escape_string($dbc, $_POST['physician_id']);

    $tmp = mysqli_query($dbc,"select max(recordID) as recordid from patient_treatment");
    $row = $tmp->fetch_assoc();
    $recordid = $row['recordid'] + 1;

    if(!$error) {
        if($dbc->query("INSERT INTO patient_treatment VALUES($recordid,'".$treatment_date."',$treatment_frequency,'".$treatment_status."',$physician_id,$patient_id,$treatment_id)")){
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
                        <label for="pid">Patient ID</label>
                        <input type="number" name="patient_id" placeholder="Patient ID" required value="<?php if($error) echo $patient_id; ?>" class="form-control" />
                        <span class="text-danger"><?php if (isset($patient_id_error)) echo $patient_id_error; ?></span>
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
</div>
<script src="https://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>