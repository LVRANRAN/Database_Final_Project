<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "f196083b";

$deid ="";
$dename="";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try{
    $connect = mysqli_connect($host,$user,$password,$database);

} catch(Exception $ex){
    echo'Error';
}


function getPosts()
{
    $posts = array();
    $posts[0] = $_POST['deid'];
    $posts[1] = $_POST['dename'];
    return $posts;
}

if(isset($_POST['search']))
{
    $data = getPosts();

    $search_Query = "SELECT * FROM DISEASE WHERE deid = $data[0]";

    $search_Result = mysqli_query($connect,$search_Query);

    if($search_Result)
    {
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                $deid = $row['deid'];
                $dename = $row['dename'];
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
    $tmp = mysqli_query($connect, "select max(deid) as deid from disease");
    $row = $tmp->fetch_assoc();
    $deid = $row['deid'] + 1;
    $data = getPosts();
    $insert_Query = "INSERT INTO `disease` (`deid`,`dename`) VALUES ($deid,`$data[1]`)";
    try
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
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP INSERT UPDATE DELETE SEARCH</title>
</head>
<body>
<form action="CRUD.php" method="POST">
    <input type="number" name="deid" placeholder= "diseaseid" value="<?php echo $deid;?>"><br><br>
    <input type="text" name="dename" placeholder = "diseasename" value="<?php echo $dename;?>"><br><br>
    <div>
        <input type="submit" name="insert" value="Add">
        <input type="submit" name="update" value="Update">
        <input type="submit" name="delete" value="Delete">
        <input type="submit" name="search" value="Find">
    </div>
</form>
</body>
</html>