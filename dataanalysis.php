<?php
session_start();
$email = $_SESSION['email'];
$role = $_SESSION['role'];
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.staticfile.org/angular.js/1.4.6/angular.min.js"></script>
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

<div class ="navbar-default navbar-fixed-top">
    <div class = "container">

        <div class ="navbar-header">
            <button class ="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button>
            <a class="navbar-brand">FFFunding</a>

        </div>

        <div class="collapse navbar-collapse">
            <ul class ="nav navbar-nav">
                <li><a href="homepage.php">Home</a></li>
                <li id = <?php echo "$role"?>><a href="datamanipulation.php">Data Manipulation</a></li>
                <li class="active"><a href ="dataanalysis.php">Data Analysis</a></li>
                <li><a href ="createRecord.php">Create Record</a></li>
            </ul>
            <ul class ="nav navbar-nav">
                <li><?php echo "<a>Hello, " .$email. "!</a>"?></li>
            </ul>
        </div>
    </div>
</div>
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>

<script>
    document.getElementById("BA").remove();

    $(".contentContainer").css("min-height",$(window).height());

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
</script>

</body>
</html>