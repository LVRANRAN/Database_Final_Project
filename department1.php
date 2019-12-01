<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "f196083b";

$did ="";
$dname="";
$dtel="";
$hid="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);

} catch(Exception $ex){
    echo'Error';
}


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

    $search_Result = mysqli_query($connect,$search_Query);

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
    <title>PHP INSERT UPDATE DELETE SEARCH</title>
</head>
<body>
<form action="department.php" method="POST">
    <input type="number" name="did" placeholder= "did(2 digits)" value="<?php echo $did;?>"><br><br>
    <input type="text" name="dname" placeholder = "dname" value="<?php echo $dname;?>"><br><br>
    <input type="text" name="dtel" placeholder= "dtel(eg:999-999-9999)" value="<?php echo $dtel;?>"><br><br>
    <input type="number" name="hid" placeholder = "hid(3 digits)" value="<?php echo $hid;?>"><br><br>
    
    <div>
        <input type="submit" name="insert" value="Add">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="search" value="Find">
    </div>
</form>
</body>
</html>