<?php

include 'config.php';

$mobile = $_POST['MobileNumber'];
$firstName = $_POST['fname'];
$midName = $_POST['mname'];
$lastName = $_POST['lname'];
$dateofBirth = $_POST['date'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$country = $_POST['country'];
$province = $_POST['province'];
$barangay = $_POST['barangay'];
$city = $_POST['city'];
$altcon = $_POST['alternatecontact'];
$email = $_POST['email'];


$stmt = $link->prepare("insert into userstbl(MobileNumber, FirstName, MiddleName, LastName, DateofBirth, Gender, Password, Country, Province, Barangay, City, AltNumber, Email) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssssssssis",$mobile, $firstName, $midName, $lastName, $dateofBirth, $gender, $password, $country, $province, $barangay, $city, $altcon, $email);
$stmt->execute();
echo"registartion successfully";
header("Location: /Sim Registartion Project/index.html");
exit;
$stmt->close();



?>