<?php

include 'config.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];


    $sql = "DELETE FROM userstbl WHERE `UserID` = $id";

    $result=mysqli_query($link, $sql);

    if($result){
        echo "Deleted Successfullty";
    }
    else {
        echo "not yet delleted";
    }
    
}



?>

