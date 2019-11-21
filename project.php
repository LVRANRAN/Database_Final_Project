<?php

session_start();
include_once 'connection.php';

//$loginuser = $_SESSION['loginuser'];
$projectID = $_GET["projectID"];

$sql = $dbc->prepare("SELECT * FROM Project WHERE pid='$projectID'");
$sql -> execute();
$sql -> bind_result($projid, $uid_project, $project_name, $description, $create_time, $minimum_budget, $maximum_budget, $fundingendtime, $completetime, $project_status);
$sql->fetch();
$sql->close();

$sql = $dbc->prepare("SELECT sum(amount) as amount  FROM Pledge WHERE pid='$projectID'");
$sql -> execute();
$sql -> bind_result($fond_received);
$sql->fetch();
$sql->close();

$uid = "xixika@gmail.com";  //当前登录用户的id


$current_time = date("Y-m-d H:i:s");
date_default_timezone_set("America/New_York");

if (isset($_POST['update_content'])) { //only project owner can update
    $error = false;
    $update_content = mysqli_real_escape_string($dbc, $_POST['update_content']);
    if ($project_status == "fund_processing") {
        echo '<script>';
        echo 'alert("you can not update while project pending")';
        echo '</script>';
    } elseif  ($uid == $uid_project) {
        if(mysqli_query($dbc, "INSERT INTO Updates VALUES('".$projectID."', '".$current_time."', '".$update_content."','','','' )")) {}
    } else {
        echo '<script>';
        echo 'alert("you are not the owner of the project, can not update")';
        echo '</script>';
    }
    unset($_POST['update_content']);
}


if(isset($_POST['comment_content'])){
    $error = false;
    $comment_content = mysqli_real_escape_string($dbc, $_POST['comment_content']);
    echo $_POST['comment_content'];
    if ($project_status == "fund_processing") {
        echo '<script>';
        echo 'alert("you can not comment while project pending")';
        echo '</script>';
    }
    elseif ($uid != $uid_project) {
        if(mysqli_query($dbc, "INSERT INTO Comment VALUES('".$uid."', '".$projectID."', '".$current_time."', '".$comment_content."')")) {
            if (mysqli_query($dbc, "INSERT INTO Log_information VALUES('" . $uid . "', '" . $projectID . "')")) {
            }
        }
    }
    else {
        echo '<script>';
        echo 'alert("you can not comment to yourself!")';
        echo '</script>';
    }
    unset($_POST['comment_content']);
}


if(isset($_POST['pledge_amount'])){
    $error = false;
    $pledge_amount = mysqli_real_escape_string($dbc, $_POST['pledge_amount']);
    $pledge_status = 'pending';

    if ($uid == $uid_project) {
        echo '<script>';
        echo 'alert("you can not pledge to yourself!")';
        echo '</script>';
    } elseif((int)$pledge_amount + (int)$fond_received > (int)$maximum_budget) {
        echo '<script>';
        echo 'alert("you can not pledge more money than max needed!")';
        echo '</script>';
    } elseif(mysqli_query($dbc, "INSERT INTO Pledge VALUES('".$uid."', '".$projectID."', '".$current_time."', '".$pledge_amount."', '".$pledge_status."')")) {
        if ((int)$pledge_amount + (int)$fond_received == (int)$maximum_budget) {
            mysqli_query($dbc, "Update Project set status = 'fund_success' where pid='$projectID'");
        }
    }
    unset($_POST['pledge_amount']);
}

$sql = $dbc->prepare("SELECT * FROM Project WHERE pid='$projectID'");
$sql -> execute();
$sql -> bind_result($projid, $uid_project, $project_name, $description, $create_time, $minimum_budget, $maximum_budget, $fundingendtime, $completetime, $project_status);
$sql->fetch();
$sql->close();

$sql = $dbc->prepare("SELECT sum(amount) as amount  FROM Pledge WHERE pid='$projectID'");
$sql -> execute();
$sql -> bind_result($fond_received);
$sql->fetch();
$sql->close();


if(isset($_POST['rate_star'])){
    $error = false;
    $rate_star = $_POST['rate_star'];
    if ($project_status == "fund_processing") {
        echo "you can not update while project pending";
    }
    elseif ($uid != $uid_project) {
        if(mysqli_query($dbc, "INSERT INTO Rate VALUES('".$uid."', '".$projectID."', '".$rate_star."')")) {}
    }
    else {
        echo '<script>';
        echo 'alert("you can not rate to yourself!")';
        echo '</script>';
    }
    unset($_POST['rate_star']);
}

if(isset($_POST['like_project'])) {
    $error = false;
    if (!$error) {
        if (mysqli_query($dbc, "INSERT INTO Likes VALUES('" . $uid . "', '" . $projectID . "')")) {
            if (mysqli_query($dbc, "INSERT INTO Log_information VALUES('" . $uid . "', '" . $projectID . "')")) {
            }
        }
        unset($_POST['like_project']);
    }
}

if(isset($_POST['like_reason'])) {
    $like_reason = mysqli_real_escape_string($dbc, $_POST['like_reason']);
    if(mysqli_query($dbc, "INSERT INTO like_Reason VALUES('" . $uid . "', '" . $projectID . "','" . $like_reason . "')")) {
        if (mysqli_query($dbc, "INSERT INTO Log_information VALUES('" . $uid . "', '" . $like_reason . "')")) {
        }
    }
    else {
    echo "can not insert";
    }
    unset($_POST['like_reason']);

}





$sql = $dbc->prepare("SELECT sum(star) as stars, count(*) as nums FROM Rate WHERE pid = '$projectID'");
$sql -> execute();
$sql -> bind_result($allpoints, $allusers);
$sql->fetch();
$sql->close();
$tmp_allpoints = (int)$allpoints;
$tmp_allusers = (int)$allusers;
if ($tmp_allusers == 0) {
    $rating = "No star";
} else {
    $rating = $tmp_allpoints/$tmp_allusers;
}

$sql = $dbc->prepare("SELECT count(*) FROM Likes WHERE pid='$projectID'");
$sql -> execute();
$sql -> bind_result($like_number);
$sql->fetch();
$sql->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Details</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" >
    <script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <style>
        .navbar-brand{
            font-size: 1.8em;
        }
        #topContainer{
            background-image:url("images/oldwhitebackground.jpg");
        }
        #topRow{
            margin-top: 100px;
            text-align:center;
        }
        #topRow h1 {
            font-size: 300%;
        }
        .center{
            text-align: center;
        }
        .link{
            color: #449D44;
        }
        .projmarginBottom{
            margin-bottom: 100px;
        }
        .infotext{
            margin-left: auto;
            margin-right: auto;
            width:500px;
        }
        #btmContainer{
            margin-bottom: auto;
        }
        .projstatus{
            color: #FF0000;
        }

    </style>
    <style type="text/css">
        .demo{padding: 1em 0;}
        a:hover,a:focus{
            outline: none;
            text-decoration: none;
        }
        .tab .nav-tabs{
            border: 1px solid #b7ddb5;
        }
        .tab .nav-tabs li{
            margin: 0;
        }
        .tab .nav-tabs li a{
            font-size: 14px;
            color: #999898;
            background: #fff;
            margin: 0;
            padding: 20px 25px;
            border-radius: 0;
            border: none;
            border-right: 1px solid #ddd;
            text-transform: uppercase;
            position: relative;
        }
        .tab .nav-tabs li a:hover{
            border-top: none;
            border-bottom: none;
            border-right-color: #ddd;
        }
        .tab .nav-tabs li.active a,
        .tab .nav-tabs li.active a:hover{
            color: #fff;
            border: none;
            background: #b7ddb5;
            border-right: 1px solid #ddd;
        }
        .tab .nav-tabs li.active a:before{
            content: "";
            width: 58%;
            height: 4px;
            background: #fff;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: 0 auto;
        }
        .tab .nav-tabs li.active a:after{
            content: "";
            border-top: 10px solid #b7ddb5;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            position: absolute;
            bottom: -10px;
            left: 43%;
        }
        .tab .tab-content{
            font-size: 13px;
            color: #999898;
            line-height: 25px;
            background: #fff;
            padding: 20px;
            border: 1px solid #b7ddb5;
            border-top: none;
        }
        .tab .tab-content h3{
            font-size: 24px;
            color: #999898;
            margin-top: 0;
        }
        @media only screen and (max-width: 480px){
            .tab .nav-tabs li{
                width: 100%;
                text-align: center;
            }
            .tab .nav-tabs li.active a,
            .tab .nav-tabs li.active a:after,
            .tab .nav-tabs li.active a:hover{
                border: none;
            }
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
            <a class="navbar-brand">Crowd Funding</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class ="nav navbar-nav">
                <li><a href="homepage.php">Home</a></li>
                <li class="active"><a href="explore.php">Explore</a></li>
                <li><a href ="fundrequest.php">Start a project</a></li>
            </ul>
            <?php
            if(isset($loginuser)){
                echo"
                    <div class=\"navbar-text navbar-right dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                       $loginuser<span class=\"caret\" ></span></a>
                        <ul class=\"dropdown-menu\">
                          <li><a href = \"profile.php?userid=$loginuser\"> My Profile </a></li>
                          <li><a href = \"editProfile.php\"> Settings</a></li>
                          <li><a href = \"logout.php\"> Log Out </a></li>
                      </ul>
                    </div> ";
            } else {
                ?>
                <form class="navbar-form navbar-right" method="POST" action="loginCheck.php">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="loginname">
                        <input type="password" class="form-control" placeholder="*****" name="password">
                        <input type="submit" class="btn btn-success"  value="Log In">
                    </div>
                    <button type="button" class ="btn btn-danger" onclick="window.location.href='signup.php'">Sign Up</button>
                </form>
                <?php
            }
            ?>
        </div>
    </div>
</div>


<div class="container contentContainer" id="topContainer">
    <div class="row center projmarginBottom infotext" id="topRow">
        <br/>
        <?php
        $projectID = $_GET["projectID"];
        echo "<div><h1 class=\"center\">".$project_name. "</h1></div>";
        echo "<div class=\"center lead\">".$description. "</div>";
        $sql = $dbc->prepare("SELECT * FROM User WHERE uid='$uid_project'");
        $sql -> execute();
        $sql -> bind_result($uid_project, $uname,$upass,$uphone, $ucredit_card,$hometown,$interests);
        $sql->fetch();
        $sql->close();
        $sql = $dbc->prepare("SELECT ptag FROM Tag WHERE pid = '$projectID'");
        $sql -> execute();
        $sql -> bind_result($tag);
        echo " Tags: ";
        while($sql -> fetch()){
            echo "<td><a href ='tag.php?clicktag=$tag'>$tag</a>  </td>\n";
        }
        $sql->close();
        ?>
    </div>
</div>

<div class="container contentContainer" id="midContainer">
    <?php
        $projectID = $_GET["projectID"];
    ?>
    <hr>
        <div class="col-md-6 marginTop">
            <div class="center">
                <h4>Project Status:</h4><h4 class="projstatus"><?php echo $project_status;?></h4><hr>
            </div>
            <ul class = "list-group">
                <?php ?>
                <li class="list-group-item">
                    <span class="glyphicon glyphicon-usd"></span> Fund Received<span class="badge">$<?php echo $fond_received;?></span></li>

                <li class="list-group-item">
                    <span class="glyphicon glyphicon-usd"></span> Fund Minimum<span class="badge">$<?php echo $minimum_budget;?></span></li>

                <li class="list-group-item">
                    <span class="glyphicon glyphicon-usd"></span> Fund Maximum<span class="badge">$<?php echo $maximum_budget;?></span></li>

                <li class="list-group-item">
                    <span class="glyphicon glyphicon-fire"></span> Average Star<span class="badge"><?php echo is_null($rating)?"Not started":$rating;?></span></li>

                <li class="list-group-item">
                    <span class="glyphicon glyphicon-thumbs-up"></span> Likes <span class="badge"><?php echo $like_number;?></span></li>
        </div>
    <div class="col-md-6 marginTop center">
    <h4><span class="glyphicon glyphicon-user"></span> Project Owner</h4>
        <?php echo "<a href='profile.php?userid=$uid_project' class ='link'>";?>
        <h4><?php echo $uid_project;?><br/></h4></a>
        <h5><span class="glyphicon glyphicon-envelope"></span> Email: <?php echo $uid_project;?></h5>
        <h5><span class="glyphicon glyphicon-cutlery"></span> Interests: <?php echo $interests;?></h5><hr>
        <h5>Post Time: <?php echo $create_time;?></h5>
        <h5><?php echo is_null($create_time)?"Funding End Time:$fundingendtime":
                "Project Start Time: $create_time";?></h5>
        <h5><?php echo is_null($completetime)?"Project Target Complete Time :$completetime":
                "Project Complete Time: $completetime";?></h5>
    </div>
</div>


<div class="container contentContainer" id="btmContainer">
    <hr>
    <div class="center">
        <?php
            $projectID = $_GET["projectID"];
        ?>
        <hr>
        <br/>
    </div>

    <div class="center">
        <a class="btn btn-success btn-lg" data-toggle ="modal" data-target="#pledgeModal" role="button">Sponsor Project</a>
        <br/><br/>
    </div>

    <?php $projectID = $_GET["projectID"];?>

    <div class="modal" id="pledgeModal">
        <div class ="modal-dialog modal-sm">
            <div class ="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Pledge Window</h4>
                </div>

                <form role ="form" class="form-inline" action="project.php?projectID=<?php echo $projectID?>" method="post">
                    <div class ="modal-body">
                        <div class="row">
                            <div class="col-md-12 marginTop">
                                <p class="form-group marginmiddle">
                                    <span class="glyphicon glyphicon-usd"></span>
                                    <input class="form-control" name="pledge_amount" type="number" placeholder="Amount" min="1"/>
                            </div>
                        </div>
                    </div>
                    <div class ="modal-footer">
                        <div class="form-group">
                                <input type="submit" name="sponsor_project" value="Sponsor Project" class="btn btn-success">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    $sql2 = "select * From Updates WHERE pid = $projectID order by update_time DESC ";
    $result = $dbc -> query($sql2); $i = 0;
    while ($row = $result -> fetch_assoc()) {
        $text_upload[++$i] = $row["text"];
        $mp3[++$i] = $row["text"];
    }
    $result -> free();
    ?>

    <div class="demo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab">Updates</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab">Comments</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">Rate Stars</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab">Likes</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade in active" id="Section1">
                                <?php
                                if(isset($text_upload)) {
                                    foreach ($text_upload as $value) {
                                        echo $value . '<br>';
                                    }
                                }
                                ?>
                                <br></br>
                                <?php
                                    function foo($movie) {
                                        echo"
                                            <div class='col-md-6'>
                                                <div class='entry clearfix'>
                                                    <div class='entry-image'>
                                                        <iframe src = $movie frameborder='0' width='500' height='281' webkitallowfullscreen  allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>";
                                    }
                                    if ($projectID < 5) {
                                        $movie_upload = array('http://player.vimeo.com/video/87701971', 'https://www.youtube.com/watch?v=WkM2Tqy-_OY', 'https://www.youtube.com/watch?v=zDJfLjUTapA');
                                        foreach ($movie_upload as $movie) {
                                            $a = $movie;
                                            foo($a);
                                            break;
                                        }
                                        echo "<br></br><br></br><br></br><br></br><br></br><br></br>";
                                    }
                                ?>


                                <form role="form" action='project.php?projectID=<?php echo $projectID?>' method="post" name="update_form">
                                    <div class ="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 marginTop">
                                                <p class="form-group marginmiddle">
                                                    <textarea class="form-control"  name = "update_content" rows="2" placeholder="Update my project!"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form-group">
                                            <input type="submit" name="add_comment" value="Update Project" class="btn btn-success" />
                                    </div>
                                </form>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section2">
                                <?php
                                    $sql2 = "select * From Comment WHERE pid = $projectID order by ctime DESC ";
                                    $result = $dbc -> query($sql2); $i = 0;
                                    $user_id = array();
                                    $comment_from_user = array();
                                    while ($row = $result -> fetch_assoc()) {
                                        echo $row["uid"]. '   ';
                                        echo $row["content"]. '<br>';
                                    }
//
                                ?>

                                <br/>
                                <button class ="btn btn-success center-block" data-toggle ="modal" data-target="#commentModal">Make a comment</button>
                                    <div class="modal" id="commentModal">
                                        <div class ="modal-dialog">
                                            <div class ="modal-content">
                                                <div class="modal-header">
                                                    <button class="close" data-dismiss="modal">x</button>
                                                    <h4 class="modal-title">Comment</h4>
                                                </div>
                                                    <form role="form" action='project.php?projectID=<?php echo $projectID?>' method="post" name="comment_form">
                                                    <div class ="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-8 marginTop">
                                                                <p class="form-group marginmiddle">
                                                                    <textarea class="form-control"  name = "comment_content" rows="8" placeholder="Your comment is important for the success of a project"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class ="modal-footer">

                                                            <div class="form-group">
                                                                <input type="submit" name="add_comment" value="Add comment" class="btn btn-success" />
                                                            </div>
                                                    </div>
                                                    </form>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <br/>
                                <button class ="btn btn-success center-block" data-toggle ="modal" data-target="#reviewModal">
                                    Rate with stars
                                </button>
                                <div class="modal" id="reviewModal">
                                    <div class ="modal-dialog">
                                        <div class ="modal-content">
                                            <div class="modal-header">
                                                <button class="close" data-dismiss="modal">x</button>
                                                <h4 class="modal-title">Reviews</h4>
                                            </div>
                                            <form role ="form" class="form-inline" action='project.php?projectID=<?php echo $projectID?>' method="post">
                                                <div class ="modal-body">
                                                    Rate the project from 1 to 5 stars<br/>
                                                    <input id="input-21e" name="rate_star" value="1" type="number" class="rating" min=1 max=5 step=1 data-size="xs" >
                                                    <br/>
                                                </div>
                                                <div class ="modal-footer">
                                                    <button class="btn btn-default" data-dismiss="modal">Close</button>
                                                    <!--            <button type="submit" class="btn btn-success" name="rate_button" >Rate</button>-->
                                                    <input type="submit" name="rate_button" value="Rate Project" class="btn btn-success">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div role="tabpanel" class="tab-pane fade" id="Section4">

                                <?php
                                $sql2 = "select contents From Like_Reason WHERE pid = $projectID";
                                $result = $dbc -> query($sql2); $i = 0;
                                while ($row = $result -> fetch_assoc()) {
                                    $comment_from_user[++$i] = $row["contents"];
                                }
                                $result -> free();
                                if(count($comment_from_user) > 0) {
                                    foreach ($comment_from_user as $value) {
                                        echo $value . '<br>';
                                    }
                                }
                                ?>

                                <form role="form" action='project.php?projectID=<?php echo $projectID?>' method="post" name="update_form">
                                    <div class ="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 marginTop">
                                                <p class="form-group marginmiddle">
                                                    <textarea class="form-control"  name = "like_reason" rows="2" placeholder="What attracts you in this project?"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="like_project" value="Like" class="btn btn-success center-block" />
                                        <br><br/>
                                    </div>
                                </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    jQuery(document).ready(function () {
        $(".rating-kv").rating();
    });
</script>
</body>
</html>
