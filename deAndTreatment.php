<?php

session_start();
include 'connection.php';
include 'function.php';
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
                <li><a href="hospitalInfo.php">HospitalInfo</a></li>
                <li class="active"><a href ="diseaseAndTreatment.php">Disease & Treatment</a></li>
                <li><a href ="record.php">Record</a></li>
            </ul>

            <form class="navbar-form navbar-right" action="timeline.php" method="post">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="loginname"/>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="*****" name="loginpassword"/>
                </div>
                <input type="submit" class="btn btn-success" name="submit" value="Log in"/>

                <button type="button" class ="btn btn-danger" onclick="window.location.href='signup.php'">Sign Up</button>
            </form>
        </div>
    </div>
</div>


//new
<script type="text/javascript" src="js/indexb.js"></script>
<!--banner-->
<table width="798" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td height="112" background="images/banner.jpg"></td>
    </tr>
</table>
<table width="780" border="0" cellpadding="0" cellspacing="0">
    <form name="form1" id="form1" method="post" action="del.php">
        <tr>
            <td height="20" width="5%" class="top"> </td>

            <td width="5%" class="top">deid</td>
            <td width="30%" class="top">dename</td>
            <td width="10%" class="top">operation</td>

        </tr>
        <?php

        /*mysql_select_db("disease",$con);
         $result = mysql_query ("select * from disease");

        echo "<table border='auto' width ='auto' height='auto'>
        <tr>
        <th>DISEASE ID</th><th>DISEASE NAME</th>
        <th>";*/
        $sqlstr1 = "select * from disease order by deid";//按id的升序查询表tb_demo02的数据
        $result = mysqli_query($dbc,$sqlstr1);//执行查询语句

        while ($rows = mysqli_fetch_array($result))
        {
            ?>
            <tr>
                <td height="25" align="center" class="m_td">
                    <input type=checkbox name="chk[]" id="chk" value=".$rows['deid'].">
                </td>
                <td height="25" align="center" class="m_td"><?php echo $rows['deid'];?></td>
                <td height="25" align="center" class="m_td"><?php echo $rows['dename'];?></td>
                <td class="m_td"><a href="#" rel="external nofollow" onClick="del(<?php echo $rows['deid'];?>)">del</a></td>
            </tr>
            <?php
        }
        ?>




        <tr>
            <td height="25" colspan="7" class="m_td" align="left">  </td>
        </tr>
    </form>
</table>
<!--show-->
<table width="798" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td height="48" background="images/bottom.jpg"> </td>
    </tr>
</table>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>

<script>

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