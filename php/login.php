<?php

include 'config.php';

$num = $_POST['number'];
$pass = $_POST['password'];
echo $num;
echo $pass;


// Execute the SQL query with a WHERE clause
$query = "SELECT UserID FROM userstbl WHERE MobileNumber = ?";
$stmt = $link->prepare($query);
$stmt->bind_param("s", $num);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    // Access the primary key value
    $userid = $row['UserID'];
}

$stmt->close();

// For ALL THE DATA
$mobilequery = "SELECT MobileNumber, FirstName, MiddleName, LastName, DateofBirth, Gender, Password, Country, Province, Barangay, City, AltNumber, Email FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($mobilequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $mobile = $row['MobileNumber'];
    $fname = $row['FirstName'];
    $mname = $row['MiddleName'];
    $lname = $row['LastName'];
    $date = $row['DateofBirth'];
    $gender = $row['Gender'];
    $password = $row['Password'];
    $country = $row['Country'];
    $province = $row['Province'];
    $barangay = $row['Barangay'];
    $city = $row['City'];
    $alt = $row['AltNumber'];
    $email = $row['Email'];
}


echo <<<HTML
<!DOCTYPE html>
<html>
<head>
<title>My Webpage</title>
</head>
<body>
    <button><a href="./update.php?updateid=$userid">UPDATE</a></button>
    <button><a href="./delete.php?deleteid=$userid">DELETE</a></button>
</body>
</html>
HTML;


echo $mobile . "<br>";
echo $fname . "<br>";
echo $mname . "<br>";
echo $lname . "<br>";
echo $date . "<br>";
echo $gender . "<br>";
echo $password . "<br>";

echo $country . "<br>";
echo $province . "<br>";
echo $barangay. "<br>";
echo $city . "<br>";

echo $alt . "<br>";
echo $email . "<br>";
?>

