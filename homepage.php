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
                <li class="active"><a href="homepage.php">Home</a></li>
                <li><a href="hospitalInfo.php">HospitalInfo</a></li>
                <li><a href ="diseaseAndTreatment.php">Disease & Treatment</a></li>
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


<div class="col-xs-12 center">
    <ul class="categorized_addons">
        <li class="categorized_addon ga" id="tutorialModule">
            <a class="content" href="/guide">
                <img alt="Small" src="img/platform/DataCollectionWizard.png">
                <h4>Data Collection Guide</h4>
            </a>
        </li>
        <li class="categorized_addon ga" id="bdstModule">
            <a class="content" data-toggle="modal" id="bdst" href="/f1-layout">
                <img alt="Small" src="img/platform/DataSubmissionPlatform.png">
                <h4>Beam Data Submission</h4>
                <br><br>
                <p class="summary subscribe ng-hide" ng-show="isSubscribe">Apply</p>
            </a>
        </li>
        <li class="categorized_addon ga" id="SFMModule">
            <a class="content" data-toggle="modal" id="analysis" href="/data-analysis">
                <img alt="Small" src="img/platform/DataAnalysis.png">
                <h4>Data Analysis</h4>
                <br><br>
                <p class="summary subscribe ng-hide" ng-show="isSubscribe">Apply</p>
            </a>
        </li>
        <li class="categorized_addon ga" id="manageModule">
            <a class="content" data-toggle="modal" id="models" href="/management">
                <img alt="Small" src="img/platform/Management.png">
                <h4>Model Management</h4>
                <br><br>
                <p class="summary subscribe ng-hide" ng-show="isSubscribe">Apply</p>
            </a>
        </li>
        <!-- ngIf: isNotCustomer --><li class="categorized_addon ga ng-scope" id="vctModule" ng-if="isNotCustomer">
            <a class="content" data-toggle="modal" id="machines" href="/modeling">
                <img alt="Small" src="img/platform/ModelingStation.png">
                <h4>Modeling WorkStation</h4>
                <br><br>
                <p class="summary subscribe ng-hide" ng-show="isSubscribe">Apply</p>
            </a>
        </li><!-- end ngIf: isNotCustomer -->
        <!-- ngIf: isAdmin -->
    </ul>
</div>


<hr>
<hr>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong>Powered by</strong>
                </h4>
                <p>Ying Ma
                    <br>Ranran Lyu</p>
            <hr class="small">
                <p class="text-muted">Copyright &copy; Fun Fun Funding</a></p>
            </div>
        </div>
    </div>
    <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
</footer>





            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.js"></script>

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