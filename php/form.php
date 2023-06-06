<?php
include 'config.php';

if(isset($_POST['submit'])){
    $fname = $POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];
    $password= ['password'];

    $sql = "INSERT INTO `profileinfotbl` (`FirstName`, `MiddleName`, `LastName`, `Gender`, `Password`) VALUES ($fname, $mname, '$lname, $date, $gender, $password)";
    $result - mysqli_query($link, $sql);

    if($result){
        echo "data inserted successfully";
    } else {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
}
 

?>