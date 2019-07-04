<?php
require_once 'connect.php';

$id = $_REQUEST['id'];

$sql = "delete from goals where goal_id = '" . $id . "'";

if(mysqli_query($link , $sql)){
    print("Deleted 'Em");

} else {
    print("Woah No Delete!")
}

echo "<script>location.href='index.php'</script>"

?>