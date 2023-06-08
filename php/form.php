<?php

include 'config.php';

$mobile = $_POST['MobileNumber'];
$firstName = $_POST['fname'];
$midName = $_POST['mname'];
$lastName = $_POST['lname'];
$dateofBirth = $_POST['date'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$country = $_POST['password'];
$province =
$barangay =
$city =
$altcon =
$email =


$stmt = $link->prepare("insert into userstbl(MobileNumber, FirstName, MiddleName, LastName, DateofBirth, Gender, Password) values(?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssss",$mobile, $firstName, $midName, $lastName, $dateofBirth, $gender, $password);
$stmt->execute();
echo"registartion successfully";
$stmt->close();



// if($conn->connect_error) {
//     die('FAILED:' .$conn->connect_error);
// } else {
//     $meow = $conn->prepare("insert into profileinfotsbl(FirstName, MiddleName, LastName, DateofBirth, Gender, Password) values(?, ?, ?, ?, ?, ?)");
//     $meow->bind_param("sss:datess",$firstName, $midName, $lastName. $date, $gender, $password);
//     $meow->execute();
//     echo"registartion successfully";
//     $->close();
//     $conn->close();
// }
?>