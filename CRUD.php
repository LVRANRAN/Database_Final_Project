<?php$host = "localhost";$user = "root";$password = "";$database = "f196083b";$deid ="";$dename="";mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);try{    $connect = mysqli_connect($host,$user,$password,$database);} catch(Exception $ex){    echo'Error';}function getPosts(){    $posts = array();    $posts[0] = $_POST['deid'];    $posts[1] = $_POST['dename'];    return $posts;}if(isset($_POST['search'])){    $data = getPosts();    $search_Query = "SELECT * FROM DISEASE WHERE deid = $data[0]";    $search_Result = mysqli_query($connect,$search_Query);    if($search_Result)    {        if(mysqli_num_rows($search_Result))        {            while($row = mysqli_fetch_array($search_Result))            {                $deid = $row['deid'];                $dename = $row['dename'];            }        }        else        {            echo'no data for this id';        }    }else    {        echo 'Result error';    }}if(isset($_POST['insert'])){  $tmp = mysqli_query($connect, "select max(deid) as deid from disease");$row = $tmp->fetch_assoc();$deid_new = $row['deid'] + 1;$data = getPosts();$insert_Query = "INSERT INTO `disease`(`deid`, `dename`) VALUES ($deid_new,'$data[1]')";	try	{		$insert_Result = mysqli_query($connect,$insert_Query);				if($insert_Result)		{	     if(mysqli_affected_rows($connect) > 0)	     {	        echo 'Data Inserted';	     }		     else	     {	      	echo 'Data Not Inserted';	     	     }	     	  		}	} catch (Exception $ex)	{  echo 'ERROR INSERT'.$ex->getMessage();	}}if(isset($_POST['delete'])){  $data = getPosts();$delete_Query = "DELETE FROM `disease` WHERE `deid` = $data[0]";	try	{		$delete_Result = mysqli_query($connect,$delete_Query);				if($delete_Result)		{	     if(mysqli_affected_rows($connect) > 0)	     {	        echo 'Data deleted';	     }		     else	     {	      	echo 'Data Not deleted';	      }	    }	} catch (Exception $ex){ 	 	 echo 'ERROR delete'.$ex->getMessage();	}}if(isset($_POST['update'])){  $data = getPosts();$update_Query = "UPDATE `disease` SET `dename`='$data[1]' WHERE `deid`= $data[0]";	try	{		$update_Result = mysqli_query($connect,$update_Query);				if($update_Result)		{	     if(mysqli_affected_rows($connect) > 0)	     {	        echo 'Data updated';	     }		     else	     {	      	echo 'Data Not updated';	      }	    }	} catch (Exception $ex){ 	 	 echo 'ERROR update'.$ex->getMessage();	}}?><!DOCTYPE html><html><body> <fg1><form action="CRUD.php" method="POST">    <fg1> <input type="number" name="deid" placeholder= "diseaseid" value="<?php echo $deid;?>"><br><br></fg1>     <fg1> <input type="text" name="dename" placeholder = "diseasename" value="<?php echo $dename;?>"><br><br></fg1>     <div>      <fg2>  <input type="submit" name="insert" value="Add"></fg2>        <fg2> <input type="submit" name="update" value="Update"></fg2>        <fg2> <input type="submit" name="delete" value="Delete"></fg2>        <fg2> <input type="submit" name="search" value="Find"></fg2>     </div></form></fg2></body></html> <style>         table           fg1      {        width:100px;        height: 40px;        font-size: 20px;         color: blue;         background-color:green;        font-family: Lucida Sans Unicode,Verdana;          padding: auto;         margin-left: 50%;                    }    fg2    {    width:100px;        height: 40px;        font-size: 20px;         color: blue;         background-color:green;        font-family: Lucida Sans Unicode,Verdana;         margin-left: 50%;                 }        h1        {        font-size: 150%;         text-align: center;         color: #00001a;         font-family: italic 2em Georgia, serif;        }                td        {        font-size: 100%;         text-align: center;         color: #00001a;         font-family: italic 2em Georgia, serif;                }      input::-webkit-input-placeholder {     color: #99CCFF;     }            p1         {         font-size: 20px;        font-family: Lucida Sans Unicode,Verdana;                 padding: auto;                   margin-left: 40%;        }              p2         {         font-size: 20px;        font-family: Lucida Sans Unicode,Verdana;                 padding: 30%;                          } </style>