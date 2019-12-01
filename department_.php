
<?php

session_start();
include 'connection.php';
include 'function.php';



$con = mysql_connect("localhost","root","");
if(!$con)
{
  die('数据库连接失败'.mysql_error());
}

if(!$con)
{
 die('数据库连接失败'.mysql_error());
}
else
{
   mysql_query("set names utf8");
   mysql_select_db("F196083B",$con);
}



mysql_select_db("hospital",$con);
$result = mysql_query ("select * from department");

echo "<table border='auto' width ='auto' height='auto'>
	<tr>
	<th><h1>DEPARTMENT ID<h1></th>
	<th><h1>DEPARTMENT NAME<h1></th>
	<th><h1>DEPARTMENT TEL<h1></th>
	<th><h1>HOSPITAL ID<h1></th>
	<th>";
	
while($row = mysql_fetch_array($result))
{	echo "<tr>";
	echo "<td>".$row['did']."</td>";
	echo "<td>".$row['dname']."</td>";
	echo "<td>".$row['dtel']."</td>";
	echo "<td>".$row['hid']."</td>";
				
	echo "<tr>";

}

?>

<!DOCTYPE html>
<html>
<body>
<iframe src=iframe.html frameborder="0" name="iframe" scrolling="no" margin-left=100px height=400px width=100% ></iframe><br>
<input type=button value="CAOZONG" onclick="iframe.location='department.php'"/>

 </body>
</html>

 <style>
   
   
   table 
        {
        font-family: Lucida Sans Unicode,Verdana;
        background-color:  #e5f7ff; 
        
        margin: 20%;
        }
        
        
        h1
        {
        font-size: 150%;
         text-align: center;
         color: #00001a;
         font-family: italic 2em Georgia, serif;
       
        }
        
        td
        {
        font-size: 100%;
         text-align: center;
         color: #00001a;
         font-family: italic 2em Georgia, serif;
        
        }
   
   input::-webkit-input-placeholder {
     color: #99CCFF; 
    }
   
    fg1
    {
        font-size: 20px;
        color: blue;
        font-family: Lucida Sans Unicode,Verdana;
          padding: auto;
         margin-left: 100px;
         z-index = 1;       
         }

    fg2
    {
        font-size: 20px;
         color: blue;
        font-family: Lucida Sans Unicode,Verdana;
         margin-top:-200px;
         margin-left: 100px;
          z-index = 2;       
    
    }

       p1
         {
         font-size: 20px;
        font-family: Lucida Sans Unicode,Verdana;
       
          padding: auto;
          
         margin-left: 40%;
        }
       
       p2
         {
         font-size: 20px;
        font-family: Lucida Sans Unicode,Verdana;
       
          padding: 30%;
          
        
        }



		  
        table 
        {
        font-family: Lucida Sans Unicode,Verdana;
        background-color:  #e5f7ff; 
        
        margin: 20%;
        }
        
        
        h1
        {
        font-size: 150%;
         text-align: center;
         color: #00001a;
         font-family: italic 2em Georgia, serif;
       
        }
        
        td
        {
        font-size: 100%;
         text-align: center;
         color: #00001a;
         font-family: italic 2em Georgia, serif;
        
        }
        
        te1
        {
        font-size: 50%;
         text-align: center;
         color: #00001a;
         font-family: italic 2em Georgia, serif;
        
        }
        
    </style>
    