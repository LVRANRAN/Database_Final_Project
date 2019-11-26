<?php
/**
 * Created by PhpStorm.
 * User: dai
 * Date: 5/5/17
 * Time: 9:45 AM
 */
?>
<!-- Bootstrap -->
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css">

<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
<link href="../css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="http://libs.baidu.com/jquery/1.10.2/jquery.min.js"></script>
<script src="js/star-rating.min.js" type="text/javascript"></script>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>

<?php
if(isset($_POST['add_comment'])){
    echo "this is good";
}
unset($_POST['add_comment']);

?>

<?php
//if(isset($_POST['signup'])){
//    echo "this is good";
//}
?>
<!--<div class="form-group">-->
<!--    <button class="submit" name = "pinglun" onclick="window.location.href='testButton.php'" ;>Add comment</button>-->
<!--</div>-->

<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
<!--    <div class="form-group">-->
<!--        <input type="submit" name="signup" value="Sign Up" class="btn btn-success" />-->
<!--    </div>-->
<!--</form>-->

<form role="form" action="project.php?projectID=$pid" method="post" name="comment_form">
    <div class="form-group">
        <input type="submit" name="add_comment" value="Add comment" class="btn btn-success" <a href='project.php?projectID=$pid'>
    </div>
</form>


<!--<button class="submit" name = "add_comment" onclick="window.location.href='project.php'";>Add comment</button>-->

<a href='project.php?projectID=$pid'>
<?php echo $_SERVER['PHP_SELF']; ?>

    <a class="btn btn-success btn-lg" data-toggle ="modal" data-target="#pledgeModal" role="button">SPONSOR IT</a>


    <form role="form" action="project.php?projectID=$pid" method="post" name="comment_form">
        <div class="form-group">
            <input type="submit" name="sponsor_project" value="Sponsor Project" class="btn btn-success" <a href='project.php?projectID=$pid'>
        </div>
    </form>


    <button class="btn btn-success">Sponsor</button>