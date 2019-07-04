<?php
    require_once 'connect.php';

    $id = $_REQUEST['id'];

    $sql = "update goals set goals_complete = '1' where goal_id = '" . $id . "'";

    if(mysqli_query($link . $sql)){
        print('Updated Em!';)
    }else{
        print('Wuh Oh No Update!')
    }

    echo "<script>location.href='index.php</script>"
?>