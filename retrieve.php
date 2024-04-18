<?php
    $data = array();
    require "conn.php";

    $id = $_POST['id'];

    $sql = "SELECT * FROM tbl_users WHERE user_id = '".$id."'";
    $que = mysqli_query($connect, $sql);
    
    if(mysqli_num_rows($que) != 0){
        $i = 0;

        while($row = mysqli_fetch_assoc($que)){
            $data[$i] = $row;
            $i++;
        }
        echo json_encode($data, JSON_PRETTY_PRINT);
    }

?>