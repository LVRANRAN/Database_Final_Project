<?php
/**
 * Created by PhpStorm.
 * User: dai
 * Date: 5/4/17
 * Time: 4:36 PM
 */

$dbc = mysqli_connect("localhost","root","","db_project");
$tmp = mysqli_query($dbc,"SELECT * FROM Project WHERE pid=2");


//$query2 = $dbc->prepare("select * From Updates WHERE pid = 1 order by update_time DESC ");
//$query2 -> execute();
//$query2 -> bind_result($pid, $update_time, $text, $mp3, $picture, $video);
////while($res = $query2->fetch_assoc()) {
////    echo $res['pid'];
////}
//$query2->fetch();


$sql = "select * From Updates WHERE pid = 1 order by update_time DESC ";
$result = $dbc -> query($sql); $i = 0;
while ($row = $result -> fetch_assoc()) {
    $text_upload[++$i] = $row["text"];
}
$result -> free();
//echo $arr[1];
//echo $arr[2];
for($i = 1; $i <= count($text_upload); $i++) {
    echo $text_upload["$i"];
    echo '<br>';
}
?>

    $num = count($text_upload);
    for($i = 1; $i <= $num; $i++) {
    echo $text_upload["$i"];
    echo '<br>';
    }

<?php
$arr = array('12', "11", "10");

foreach($text_upload as $value){
    echo $value.'<br>';
}
?>