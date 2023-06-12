<?php

include 'config.php';

$num = $_POST['number'];
$pass = $_POST['password'];
echo $num;
echo $pass . PHP_EOL;


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

// For MOBILE NUMBER
$mobilequery = "SELECT MobileNumber FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($mobilequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $mobile = $row['MobileNumber'];
}

// for FirstName 
$fnamequery = "SELECT FirstName FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($fnamequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $fname = $row['FirstName'];
}

// for MiddleName
$mnamequery = "SELECT MiddleName FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($mnamequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $mname = $row['MiddleName'];
}

// for Last Name
$lnamequery = "SELECT LastName FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($lnamequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $lname = $row['LastName'];
}


//For Date
$datequery = "SELECT DateofBirth FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($datequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $date = $row['DateofBirth'];
}

//For Gender
$genderquery = "SELECT Gender FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($genderquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $gender = $row['Gender'];
}

//For Password
$passwordquery = "SELECT Password FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($passwordquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $password = $row['Password'];
}

//For Country
$countryquery = "SELECT Country FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($countryquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $country = $row['Country'];
}

//For Province
$provincequery = "SELECT Province FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($provincequery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $province = $row['Province'];
}

//For Barangay
$barangayquery = "SELECT Barangay FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($barangayquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $barangay = $row['Barangay'];
}

//For City
$cityquery = "SELECT City FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($cityquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $city = $row['City'];
}

//For Alternative Number
$altquery = "SELECT AltNumber FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($altquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $alt = $row['AltNumber'];
}

//For Password
$emailquery = "SELECT Email FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($emailquery);
$stmt->bind_param("i", $userid);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $email = $row['Email'];
}


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