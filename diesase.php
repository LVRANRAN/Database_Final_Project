<?php

session_start();
$email = $_SESSION['email'];
$role = $_SESSION['role'];
include 'connection.php';

$deid = "";
$dename = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['deid'];
    $posts[1] = $_POST['dename'];
    return $posts;
}
//find data according to id
if (isset($_POST['search'])) {
    $data = getPosts();

    $search_Query = "SELECT * FROM DISEASE WHERE deid = $data[0]";

    $search_Result = mysqli_query($dbc,$search_Query);

    if ($search_Result) {
        if (mysqli_num_rows($search_Result)) {
            while ($row = mysqli_fetch_array($search_Result)) {
                $deid = $row['deid'];
                $dename = $row['dename'];
            }
        } else {
            echo 'no data for this id';
        }
    } else {
        echo 'Result error';
    }

}

//insert data into database
if (isset($_POST['insert'])) {

    $tmp = mysqli_query($dbc, "select max(deid) as deid from disease");
    $row = $tmp->fetch_assoc();
    $deid_new = $row['deid'] + 1;

    $data = getPosts();
    $insert_Query = "INSERT INTO `disease`(`deid`, `dename`) VALUES ($deid_new,'$data[1]')";
    try {
        $insert_Result = mysqli_query($dbc, $insert_Query);

        if ($insert_Result) {
            if (mysqli_affected_rows($dbc) > 0) {
                echo 'Data Inserted';
            } else {
                echo 'Data Not Inserted';

            }


        }
    } catch (Exception $ex) {
        echo 'ERROR INSERT' . $ex->getMessage();
    }
}

//delete data from database
if (isset($_POST['delete'])) {
    $data = getPosts();
    $delete_Query = "DELETE FROM `disease` WHERE `deid` = $data[0]";
    try {
        $delete_Result = mysqli_query($dbc, $delete_Query);

        if ($delete_Result) {
            if (mysqli_affected_rows($dbc) > 0) {
                echo 'Data deleted';
            } else {
                echo 'Data Not deleted';
            }
        }
    } catch (Exception $ex) {
        echo 'ERROR delete' . $ex->getMessage();
    }
}

//update data in database
if (isset($_POST['update'])) {
    $data = getPosts();
    $update_Query = "UPDATE `disease` SET `dename`='$data[1]' WHERE `deid`= $data[0]";
    try {
        $update_Result = mysqli_query($dbc, $update_Query);

        if ($update_Result) {
            if (mysqli_affected_rows($dbc) > 0) {
                echo 'Data updated';
            } else {
                echo 'Data Not updated';
            }
        }
    } catch (Exception $ex) {
        echo 'ERROR update' . $ex->getMessage();
    }
}

//generate data table


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>FunFunFunding</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <style>

        .title{
            color: #FFFFFF;
        }

        .navbar-brand{
            font-size: 1.8em;
        }


        #topRow h1 {
            font-size: 300%;

        }

        .center{
            text-align: center;
        }

        .title{
            margin-top: 100px;
            font-size: 300%;
        }

        #footer {
            background-color: #B0D1FB;
        }

        .marginBottom{
            margin-bottom: 30px;
        }

        .tagcontainer{
            height: 350px;
            width: 1200px;
            background:url("images/hometagbackground.jpg") center;
            color: white;
        }

    </style>
</head>
<body>
<div style="border:2px solid #a1a1a1; border-radius:25px;padding:50px 40px;width:1000px; text-align:center;margin-left:auto;margin-right: auto;margin-top: 100px;margin-bottom: 50px;" >
<div class ="navbar-default navbar-fixed-top">
    <div class = "container">
        <div class ="navbar-header">
            <button class ="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand">LPHospital</a>

        </div>

        <div class="collapse navbar-collapse">

            <ul class ="nav navbar-nav">
                <li><a href="homepage.php">Home</a></li>
                <li  class="active"><a href="datamanipulation.php">Data Manipulation</a></li>
                <li><a href ="dataanalysis.php">Data Analysis</a></li>
                <li><a href ="createRecord.php">Create Record</a></li>
            </ul>
            <ul class ="nav navbar-nav">
                <li><?php echo "<a>Hello, " .$email. "!</a>"?></li>
            </ul>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4 col-md-offset-4 col-no-padding well">
        <form onsubmit="return PostData()"  method="POST">
            <fieldset>
                <div class="form-group">
                    <input type="number" name="deid" placeholder= "diseaseid" value="<?php echo $deid;?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" name="dename" placeholder = "diseasename" value="<?php echo $dename;?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="insert" value="Add" class="btn btn-primary" />
                    <input type="submit" name="update" value="Update" class="btn btn-primary" />
                    <input type="submit" name="delete" value="Delete" class="btn btn-primary" />
                    <input type="submit" name="search" value="Find" class="btn btn-primary" />
                </div>
            </fieldset>
        </form>
    </div>
</div>
<?php
$result = mysqli_query($dbc,"select * from disease");
echo "<table align=\"center\" style=\"text-align: center;width: 600px; \" class=\"table table-striped\">
    <caption><h1>Disease Information</h1></caption>
	<tr>
	<th style=\"text-align: center;\">DISEASE ID</th>
	<th style=\"text-align: center;\">DISEASE NAME</th>
	
	<th>
";

while($row = mysqli_fetch_array($result))
{	echo "<tr>";
    echo "<td>".$row['deid']."</td>";
    echo "<td>".$row['dename']."</td>";
    echo "<tr>";

}?>
</div>
 </body>
<script>
    function PostData() {
        $.ajax({
            type: "POST",
            url: "post.go",
            data : "",
            success: function(msg) {
            }
        });
        return false;
    }
</script>
</html>

