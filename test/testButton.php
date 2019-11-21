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
    if(isset($pinglun)){
        echo "this is good";
    }
?>
<div class="form-group">
    <button class="submit" name = "pinglun" onclick="window.location.href='testButton.php'" ;>Add comment</button>
</div>
