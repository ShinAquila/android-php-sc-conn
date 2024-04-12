<?php
    require "conn.php";

    if(!empty($_POST['uname']) && !empty($_POST['pword']) && !empty($_POST['email'])){
        $uname = $_POST['uname'];
        $pword = $_POST['pword'];
        $email = $_POST['email'];

        $sql = "INSERT INTO tbl_users (user_uname,user_pword,user_email) VALUES ('".$uname."','".$pword."','".$email."')";

        if(mysqli_query($connect, $sql)){
            echo "Success";
        }else {
            echo "Fail";
        }
    } else {
        echo "Field Require";
    }

?>