<!--
<!DOCTYPE HTML>
<html>
<body>
	<canvas id="myCanvas"></canvas>
 
	<script type="text/javascript">
		var canvas=document.getElementById('myCanvas');
		var ctx=canvas.getContext('2d');
		ctx.fillStyle='#FF0000';
		ctx.fillRect(0,0,80,100);
	</script>
 
</body>
</html>



<!DOCTYPE HTML>
<html>
<body>
	<canvas id="roundness" width="600" height="300"> </canvas>

	<script type="text/javascript">

					var canvas = document.getElementById("roundness");
                    var context = canvas.getContext("2d");
                    context.strokeStyle = "aqua";//圆形的颜色
                    context.lineWidth = "2";
                    context.beginPath();
                   context.arc(100,100,40,0,2*Math.PI);  //40此值设置圆形的大小

                   context.stroke();
	</script>
 
</body>
</html>-->




<?php

session_start();
include 'connection.php';
include 'function.php';

$dataM = 8 ;
$dataT = 8;
$dataW = 8;
$dataS = 8;

$PM = 8;
$PW = 8;
$PS = 8;

$sql1 = "select count(*) from `patient` ";

$resultT=mysqli_query($dbc,$sql1);
while($rowT=mysqli_fetch_row($resultT))
{
	//echo $rowT[0];
	$dataT = $rowT[0];
	echo "<br/>";
}

$sql2 = "select count(PSTATUS) from `patient` where PSTATUS='M' ";

$resultM=mysqli_query($dbc,$sql2);
while($rowM=mysqli_fetch_row($resultM))
{
	//echo $rowM[0];
	$dataM = $rowM[0];
	echo "<br/>";

}

$sql3 = "select count(PSTATUS) from `patient` where PSTATUS='W' ";

$resultW=mysqli_query($dbc,$sql3);
while($rowW=mysqli_fetch_row($resultW))
{
	//echo $rowW[0];
	$dataW = $rowW[0];
	echo "<br/>";

}

$sql4 = "select count(PSTATUS) from `patient` where PSTATUS='S' ";

$resultS=mysqli_query($dbc,$sql4);

while($rowS=mysqli_fetch_row($resultS))
{
	//echo $rowS[0];
	$dataS = $rowS[0];
	echo "<br/>";

}
    $PM = $dataM/$dataT;
    $PW = $dataW/$dataT;
    $PS = $dataS/$dataT;
    
	$PM=round($PM,2);   
	$PW=round($PW,2);
	$PS=round($PS,2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>饼状图</title>
</head>
<body>
<div> <p>   patient status statistics </p></div>
<canvas id="canvas"></canvas>
<script>

    (function () {
        var data = [{
            "value":<?php echo "$PM" ?>,
            //"color":"#FFCC66",
            "color":"red",
            "name":"M"
        },{
            "value":<?php echo "$PW" ?>,
           // "color":"#CC0000",
             "color":"green",
            "name":"W"
        },{
            "value":<?php echo"$PS" ?>,
           // "color":"#99CCFF",
              "color":"blue",
            "name":"S"
        }/*,{
            "value":"0.1",
            "color":"grey",
            "name":"PHP"
        }*/];
       var canvas = document.getElementById("canvas");
       //设置宽高不从css中设置
       canvas.width = 600;//设置canvas宽
       canvas.height = 600;//设置canvas高
       //canvas.style.border = "1px solid red";
        //获取上下文
       var ctx = canvas.getContext("2d");
       //画图
        var x0  = 300,y0 = 300;//圆心
        var x,y;//文字放置位置
        var radius = 100;
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
</body>
</html>