<?php
/**
 * Created by PhpStorm.
 * User: dai
 * Date: 5/4/17
 * Time: 9:58 PM
 */
?>

<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
<!---->
<!--<div class="row">-->
<!--        <div class="col-md-6">-->
<!--            <div class="entry-image">-->
<!--                <data-lightbox="image"><img class="image_fade" src=https://nynjgoodwill.files.wordpress.com/2011/10/latin_dance.jpg width="500" height="281" alt="Standard Post with Image"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-6">-->
<!--            <div class="entry clearfix">-->
<!--                <div class="entry-image">-->
<!--                    <iframe src="http://player.vimeo.com/video/87701971" frameborder="0" width="500" height="281" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--</div>-->

<?php

//echo
//"
//<div class='col-md-6'>
//    <div class='entry clearfix'>
//        <div class='entry-image'>
//            <iframe src='http://player.vimeo.com/video/87701971' frameborder='0' width='500' height='281' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
//        </div>
//    </div>
//</div>
//" ?>
<!---->
<?php
//$movie_upload =array('http://player.vimeo.com/video/87701971', 'https://www.youtube.com/watch?v=WkM2Tqy-_OY','https://www.youtube.com/watch?v=zDJfLjUTapA');
//$image_upload =array('https://nynjgoodwill.files.wordpress.com/2011/10/latin_dance.jpg', 'http://pic.qiantucdn.com/58pic/26/08/70/58bdcb438bda6_1024.jpg');
//
//foreach($movie_upload as $movie){
//    echo $movie;
//    echo
//"
//    <div class='col-md-6'>
//        <div class='entry clearfix'>
//            <div class='entry-image'>
//                <iframe src=$movie frameborder='0' width='500' height='281' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
//            </div>
//        </div>
//    </div>
//";
//
//}
//?>


<?php
function foo($movie) {
//    if(count($movie) = )
echo
"
<div class='col-md-6'>
    <div class='entry clearfix'>
        <div class='entry-image'>
            <iframe src = $movie frameborder='0' width='500' height='281' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
    </div>
</div>
";
}
$movie_upload =array('http://player.vimeo.com/video/87701971', 'https://www.youtube.com/watch?v=WkM2Tqy-_OY','https://www.youtube.com/watch?v=zDJfLjUTapA');

foreach($movie_upload as $movie) {
    $a = $movie;
    foo($a);
}
?>


