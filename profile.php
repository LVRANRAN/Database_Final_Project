<?php
session_start();
include 'connection.php';
include 'function.php';

$uidforp = $_GET["userid"];

$query0 = $conn->prepare(
    "SELECT *
            FROM UserProfiles
            WHERE UID = '$uidforp'");
$query0 -> execute();
$query0 -> bind_result($puid,$pfirstname,$plastname,$pgender,$pcity,$pstate,$pcellphone,
    $pemailaddress, $pcreditcardnumber, $pinterests);
$query0->fetch();



?>



<!DOCTYPE HTML>
<html>
	<head>

		<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Profile Page</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->



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
                    <li><a href="explore.php">Explore</a></li>
                    <li><a href ="fundrequest.php">Start a project</a></li>
                </ul>




            </div>
        </div>
    </div>








		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="#" class="image avatar"><img src="images/avatar.jpg" alt="" /></a>

                    <?php
                            echo "<h1><strong>$pfirstname $plastname</strong></h1><br/><br/>";
                            echo "<span class=\"glyphicon glyphicon-user\"></span> Gender: $pgender<br/>";
                            echo "<span class=\"glyphicon glyphicon-map-marker\"></span> Location: $pcity, $pstate<br/>";
                            echo "<span class=\"glyphicon glyphicon-cutlery\"></span> Interest: $pinterests<br/>";
                            echo "<span class=\"glyphicon glyphicon-envelope\"></span> Email: $pemailaddress<br/><br/><br/>";

                         $query0->close();







                    $query11 = $conn->prepare(
                        "SELECT count(*) as followingnum
                                FROM Following
                                WHERE FollowerID = '$uidforp'");
                    $query11 -> execute();
                    $query11 -> bind_result($followingnum);
                    $query11->fetch();

                    echo "Following: $followingnum";


                    $query11->close();

                    echo " / ";


                    $query12 = $conn->prepare(
                        "SELECT count(*) as followernum
                                FROM Following
                                WHERE UID = '$uidforp'");
                    $query12 -> execute();
                    $query12 -> bind_result($followernum);
                    $query12->fetch();

                    echo "Follower: $followernum";


                    $query12->close();



                    ?>



                    <br/>




                </div>
			</header>

		<!-- Main -->
			<div id="main">






				<!-- One -->
					<section id="one">

                    <?php

                        $query2 = $conn->prepare(
                        "SELECT *
                        FROM Projects
                        WHERE OwnerID = '$uidforp'");
                        $query2 -> execute();
                        $query2 -> bind_result($pprojid,$pprojname,$pdescription,$pownerid,$pminfundvalue,$pmaxfundvalue,$pposttime,
                        $pfundingendtime, $pstarttime, $ptargettime, $pcompletetime, $plikecount, $psponsorcount, $palreadyfund, $pstatus, $pavgrating);


                        echo " <header class=\"major\">
							<h2>Owned Projects</h2>
						        </header>
						        <div class=\"table-wrapper\">
						        <table class=\"table  table-hover\">
                                  <thead>
                                 <tr>
                               <td> Project Name </td><td> Post Time </td><td> Status </td></tr>
                             </thead>
                                <tbody>";

                        while($query2 -> fetch()){

                        echo "<tr>
                              <td><a href ='project.php?projectname=$pprojname'>$pprojname</a></td><td> $pposttime</td><td> $pstatus </td>";
                        echo "</tr>\n";
                    }

                        echo"
                         </tbody>
                         </table>
                         </div>";

                        $query2->close();


                    ?>

					</section>

				<!-- Two -->
					<section id="two">


                        <?php

                        $query3 = $conn->prepare(
                            "SELECT pl.ProjID, pj.ProjName, PledgeTime, Amount
                                    FROM Pledges pl NATURAL JOIN Projects pj
                                    WHERE UID = '$uidforp'");
                        $query3 -> execute();
                        $query3 -> bind_result($pprojid,$projectname,$pledgetime,$amount);


                        echo " <header class=\"major\">
							<h2>Recent Sponsorships</h2>
						        </header>
						        <div class=\"table-wrapper\">
						        <table class=\"table  table-hover\">
                                  <thead>
                                 <tr>
                               <td> Sponsored Project </td><td> Pledged Time </td><td> Pledged Amount </td></tr>
                             </thead>
                                <tbody>";

                        while($query3 -> fetch()){

                            echo "<tr>
                              <td><a href ='project.php?projectname=$projectname'>$projectname</a></td><td> $pledgetime</td><td>$ $amount </td>";
                            echo "</tr>\n";
                        }

                        echo"
                         </tbody>
                         </table>
                         </div>";

                        $query3->close();


                        ?>






			</div>




    <?php




    ?>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<ul class="copyright">
						<li>&copy;Fun Fun Funding</li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.js"></script>

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>