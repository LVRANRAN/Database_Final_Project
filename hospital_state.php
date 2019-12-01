
<?php

session_start();
$email = $_SESSION['email'];
$role = $_SESSION['role'];
include 'connection.php';

$dataM = "";
$dataT = "";
$dataW = "";
$dataS = "";
$dataH = "";


$PM = "";
$PW = "";
$PS = "";
$PH = "";

$sql1 = "select count(*) from `hospital` ";

$resultT=mysqli_query($dbc,$sql1);
while($rowT=mysqli_fetch_row($resultT))
{
	//echo $rowT[0];
	$dataT = $rowT[0];
	echo "<br/>";

}

$sql2 = "select count(hstate) from `hospital` where hstate='NY' ";

$resultM=mysqli_query($dbc,$sql2);
while($rowM=mysqli_fetch_row($resultM))
{
	//echo $rowM[0];
	$dataM = $rowM[0];
	echo "<br/>";

}

$sql3 = "select count(hstate) from `hospital` where hstate='CA' ";

$resultW=mysqli_query($dbc,$sql3);
while($rowW=mysqli_fetch_row($resultW))
{
	//echo $rowW[0];
	$dataW = $rowW[0];
	echo "<br/>";

}



$sql4 = "select count(hstate) from `hospital` where hstate='TX' ";

$resultS=mysqli_query($dbc,$sql4);

while($rowS=mysqli_fetch_row($resultS))
{
	//echo $rowS[0];
	$dataS = $rowS[0];
	echo "<br/>";

}



$sql5 = "select count(hstate) from `hospital` where hstate='FL' ";

$resultH=mysqli_query($dbc,$sql5);

while($rowH=mysqli_fetch_row($resultH))
{
	//echo $rowS[0];
	$dataH = $rowH[0];
	echo "<br/>";

}

    $PM = $dataM/$dataT;
    $PW = $dataW/$dataT;
    $PS = $dataS/$dataT;
    $PH = $dataH/$dataT;
    
    /*echo $dataM;
	echo "<br/>";
	echo $dataW;
	echo "<br/>";
	echo $dataS;
	echo "<br/>";
	echo $dataH;*/
    
	$PM=round($PM,2);   
	$PW=round($PW,2);
	$PS=round($PS,2);
	$PH=round($PS,2);
 
	/*echo $PM;
	echo "<br/>";
	echo $PW;
	echo "<br/>";
	echo $PS;
	echo "<br/>";
	echo $PH;*/



?>

<!DOCTYPE html>
<html lang="en">
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
    
    .txtt {
    /*绝对位置*/
    position: absolute;
    background: #C4E6E6;
    /*透明度*/
    opacity: 0.6;
    /*span标签的大小*/
    width: 600px;
    height: 230px;
    /*偏移到div上*/
    left: 0;
    top:300px;
    /*span标签下移*/
    bottom: 0.1px;
    text-align: center;
    color: white;
    font-family: italic 2em Georgia, serif;
    font-size: 65px;
     text-shadow: 5px 5px 5px black;
     z-index: 5;
 
    
}
   
    
    
    	/*为了能够设置两个标签叠加在一起，需要设置其父标签*/
	.father{
		/*标签位置设置为相对的*/
		position: relative;
		text-align: center;
		width: 900px;
	}
	/*canvas的大小需要在起标签内设置，否则会拉伸或缩小默认的大小*/
	.canvas{
		
		/*位置绝对*/
		position: absolute;
		top: 0;
		left: 0;
		/*设置所在层数，在上层*/
		z-index: 1;
	}
	/*需要将img背景图的尺寸和canvas的尺寸设置相同*/
	.canvas_bgp{
		width: 1280px;
		height: 900px;
		/*位置绝对*/
		position: absolute;
		top: 0;
		left: 0;
		}
		
        .dropdown {
            position: relative;
            display: inline-block;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .second {
            color: #555555;
            list-style-type:none
        }
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
                <li id = <?php echo "$role"?>><a href="diesase.php">Data Manipulation</a></li>
                <li class="active dropdown"><a href ="dataanalysis.php">Data Analysis</a>
                    <ul class="dropdown-content">
                        <li class="second">
                            <a href="dataanalysis.php">Patient Status</a>
                        </li>
                        <li class="second">
                            <a href="race.php">Patient Race</a>
                        </li>
                        <li class="second">
                            <a href="hospital_state.php">Hospital State</a>
                        </li>
                    </ul>
                </li>
                <li><a href ="createRecord.php">Create Record</a></li>
            </ul>
            <ul class ="nav navbar-nav">
                <li><?php echo "<a>Hello, " .$email. "!</a>"?></li>
            </ul>
        </div>
    </div>
</div>


<div align="center" class="father">
		<canvas class="canvas"  id="canvas"></canvas>
		<img src="images/fenxi.jpg" class="canvas_bgp">
		<span class="txtt"> hospital state percent</span>
	</div>
	
	
<script type="text/javascript">
    (function () {
        var data = [{
            "value":<?php echo "$PM" ?>,
            //"color":"#FFCC66",
            "color":"#CD6090",
            "name":"NY"
        },{
            "value":<?php echo "$PW" ?>,
           // "color":"#CC0000",
             "color":"#CDCD00",
            "name":"CA"
        },{
            "value":<?php echo"$PS" ?>,
           // "color":"#99CCFF",
              "color":"#CDAA7D",
            "name":"TX"
        },{
            "value":<?php echo"$PH" ?>,
            "color":"#7EC0EE",
            "name":"FL"
        }];
      var canvas = document.getElementById("canvas");
        //设置宽高不从css中设置
        canvas.width = 1280;//设置canvas宽
        canvas.height = 800;//设置canvas高
       
        //canvas.style.border = "1px solid red";
        
        
       /* img = new Image();
        img.src = "images/fenxi.jpg" ;
        img.onload = function()
        {	
  	      var ptrn=context.createpattern;
  	      context.fillStyle = ptrn;
  	      context.fillRect(0,0,800,600);
        
        }*/

        
        //获取上下文
        var ctx = canvas.getContext("2d");
        //画图
        var x0  = 950,y0 = 400;//圆心
        var x,y;//文字放置位置
        var radius = 150;
        var tempAngle = -90;//画圆的起始角度
        for(var i = 0;i<data.length;i++){
            var startAngle = tempAngle*Math.PI/180;//起始弧度
            var angle = data[i].value*360;
            var endAngle = (tempAngle+angle)*Math.PI/180;//结束弧度
            var textAngle = tempAngle + 0.5*angle;//文字放的角度
            x = x0 + Math.cos(textAngle*Math.PI/180)*(radius+20);//文字放的X轴
            y = y0 + Math.sin(textAngle*Math.PI/180)*(radius+20);//文字放的Y轴
            //如果文字在圆形的左侧，那么让文字 对齐方式为 文字结尾对齐当前坐标。
            if( textAngle > 90 && textAngle < 270 ) {
                ctx.textAlign = 'end';
            }
            var text = data[i].name + " "+ data[i].value*100+"%";
        
          
         
            
            ctx.fillText(text,x,y);
            ctx.beginPath();
            ctx.moveTo(x0,y0);
            ctx.fillStyle = data[i].color;

            ctx.arc(x0,y0,radius,startAngle,endAngle);
            ctx.fill();
            tempAngle += angle;
        }
    }());
</script>
<script>
    document.getElementById("BA").remove();
</script>
</body>
</html>