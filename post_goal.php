<?php
require_once 'connect.php';

$category = $_REQUEST['cat'];
$text = $_REQUEST['text'];
$date = $_REQUEST['goaldate'];
$complete = $_REQUEST['complete'];

if($complete == '' || $complete == null){
    $complete = 0;
}

$sql = "insert into goals (goal_category, goal_test goal_date,goal_complete) values " ;

$sql .= "('" . $category . "',";
$sql .= "'" . $text . "',";
$sql .= "'" . $date . "',";
$sql .= "'" . $complete . "')";

if(mysqli_query($link, $sql)){
    print("Got 'Em!!");
} else {
     print("Wuh Woah!")

}