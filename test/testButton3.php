<?php
/**
 * Created by PhpStorm.
 * User: dai
 * Date: 5/5/17
 * Time: 11:00 AM
 */?>

<?php
//if(isset($_POST['add_comment'])){
//    echo "this is good";
//}
//unset($_POST['add_comment']);
//
//?>
<!---->
<!---->
<?php
//if(isset($_POST['sponsor_project'])){
//    echo "this is good";
//}
//unset($_POST['sponsor_project']);
//
//?>
<!---->
<!--<form role="form" action="project.php?projectID=--><?php //echo $projectID?><!--" method="post" name="comment_form">-->
<!--    <div class="form-group">-->
<!--        <input type="submit" name="sponsor_project" value="Sponsor Project" class="btn btn-success"> <a href='project.php?projectID=$pid'>-->
<!--    </div>-->
<!--</form>-->

<?php
$projectID = 1;
if (isset($_POST['add_comment'])) {
    echo "this is good";
    echo $_POST['add_comment'];
    unset($_POST['add_comment']);
}
?>

<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="comment_form">
    <div class="form-group">
        <input type="submit" name="add_comment" value="Add comment" class="btn btn-success" />
    </div>
</form>
