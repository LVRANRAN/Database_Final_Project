<?php
//Insert Data
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "f196083b";
try
{
    $conn = new PDO("mysql:host=$hostname;dbname=$databasename",$username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(isset($_POST["gender"]))
    {
        $query = "INSERT INTO gender(gender) VALUES (:gender)";
        $statement = $conn->prepare($query);
        $statement->execute(
            array(
                'gender' => $_POST["gender"]
            )
        );
        $count = $statement->rowCount();
        if($count > 0)
        {
            echo "Data Inserted Successfully..!";
        }
        else
        {
            echo "Data Insertion Failed";
        }
    }
}
catch(PDOException $error)
{
    echo $error->getMessage();
}
?>