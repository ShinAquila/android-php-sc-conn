<?php
    require "conn.php";

    if(!empty($_POST['id'])){
        $id = $_POST['id'];

        $sql = "DELETE FROM tbl_users WHERE user_id = '".$id."'";

        if(mysqli_query($connect, $sql)){
            echo "Delete";
        }else {
            echo "Fail";
        }
    } else {
        echo "Field Require";
    }

?>