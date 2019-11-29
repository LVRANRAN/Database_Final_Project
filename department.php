<?php
session_start();
$email = $_SESSION['email'];
$role = $_SESSION['role'];
include 'connection.php';
$did ="";
$dname="";
$dtel="";
$hid="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['did'];
    $posts[1] = $_POST['dname'];
    $posts[2] = $_POST['dtel'];
    $posts[3] = $_POST['hid'];
   
    return $posts;
}


if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM DEPARTMENT WHERE did = $data[0]";

    $search_Result = mysqli_query($dbc,$search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $did = $row['did'];
                $dname = $row['dname'];
                $dtel = $row['dtel'];
                $hid = $row['hid'];
               
                
            }
        }
        else
        {
            echo'no data for this id';
        }
    }else
    {
        echo 'Result error';
    }

}


if(isset($_POST['insert']))
{  

$tmp = mysqli_query($connect, "select max(did) as did from department");
$row = $tmp->fetch_assoc();
$did_new = $row['did'] + 1;

//$tmpp = mysqli_query($connect, "select (distinct)hid from hospital");
//$sql ="select (distinct)hid from hospital";
//$result = $mysqli->query($sql)
//$hid_all = mysqli_fetch_all($result);

$tmpp = mysqli_query($connect, "select hid from hospital");
$hid_all  = $tmpp->fetch_assoc();


$data = getPosts();
 
 
       if(($data[1]!= null) and ($data[2]!= null) and (in_array($data[3],$hid_all)))
		
		{	
		    $insert_Query = "INSERT INTO `department`(`did`, `dname`, `dtel`, `hid`)
			 VALUES ($did_new,'$data[1]','$data[2]',$data[3])";
			  echo 'Data Inserted';
         }

      else if(($data[1]== null) or ($data[2] == null) or ($data[3] == null))
             {
              echo 'lack data';
              }
   
		else 
		{
    		echo 'worng hid';
    	
    	 }
}

	/*try
	{
		$insert_Result = mysqli_query($connect,$insert_Query);

		if($insert_Result)
		{
	     if(mysqli_affected_rows($connect) > 0)
	     {
	        echo 'Data Inserted';
	     }
	     else
	     {
	      	echo 'Data Not Inserted';

	     }


		}
	} catch (Exception $ex)
	{  echo 'ERROR INSERT'.$ex->getMessage();
	}
}*/



if(isset($_POST['delete']))
{  
$data = getPosts();
$delete_Query = "DELETE FROM `department`  WHERE `did` = $data[0]";
	try
	{
		$delete_Result = mysqli_query($connect,$delete_Query);
		
		if($delete_Result)
		{
	     if(mysqli_affected_rows($connect) > 0)
	     {
	        echo 'Data deleted';
	     }	
	     else
	     {
	      	echo 'Data Not deleted';
	      }
	    }
	} catch (Exception $ex){ 
	 	 echo 'ERROR delete'.$ex->getMessage();
	}
}


if(isset($_POST['update']))
{  
$data = getPosts();
$update_Query = "UPDATE `department` SET `dname`='$data[1]',
`dtel`='$data[2]',`hid`=$data[3] WHERE `did`= $data[0]";
	try
	{
		$update_Result = mysqli_query($connect,$update_Query);
		
		if($update_Result)
		{
	     if(mysqli_affected_rows($connect) > 0)
	     {
	        echo 'Data updated';
	     }	
	     else
	     {
	      	echo 'Data Not updated';
	      }
	    }
	} catch (Exception $ex){ 
	 	 echo 'ERROR update'.$ex->getMessage();
	}
}

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
                <li class="active"><a href="datamanipulation.php">Data Manipulation</a></li>
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
        <form action="department.php"  method="POST">
            <fieldset>
                <div class="form-group">
                    <input type="number" name="did" placeholder= "did(2 digits)" value="<?php echo $did;?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" name="dname" placeholder = "dname" value="<?php echo $dname;?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="text" name="dtel" placeholder= "dtel(eg:999-999-9999)" value="<?php echo $dtel;?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="number" name="hid" placeholder = "hid(3 digits)" value="<?php echo $hid;?>" class="form-control"/>
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
$result = mysqli_query ($dbc,"select * from department");

echo "<table align=\"center\" style=\"text-align: center;width: 700px; \" class=\"table table-striped\">
    <caption><h1>Department Information</h1></caption>
	<tr>
	<th>DEPARTMENT ID</th>
	<th>DEPARTMENT NAME</th>
	<th>DEPARTMENT TEL</th>
	<th>HOSPITAL ID</th>
	<th>";

while($row = mysqli_fetch_array($result))
{	echo "<tr>";
    echo "<td>".$row['did']."</td>";
    echo "<td>".$row['dname']."</td>";
    echo "<td>".$row['dtel']."</td>";
    echo "<td>".$row['hid']."</td>";

    echo "<tr>";

}?>
</div>
</body>
</html>