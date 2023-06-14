<?php 

include 'config.php';

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
}

// For ALl the Data
$query = "SELECT MobileNumber, FirstName, MiddleName, LastName, DateofBirth, Gender, Password, Country, Province, Barangay, City, AltNumber, Email FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($query);
$stmt->bind_param("i", $id);
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

echo <<<HTML
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/Sim Registartion Project/css/form-style.css">
<head>
<title>My Webpage</title>
</head>
<body>
<div class="form-container">
        <form action="/Sim Registartion Project/php/form.php" method="post">

            <div>

                <section class="number">
                    <div>
                        <h2>Mobile Number Info</h2>
                        <span>Fill in the data for Mobile Number and One Time Password</span>

                    </div>
                    
                        
                        <div class="forInput">
                            <h4>Mobile Data</h4>

                            <label for="MobileNumber">Mobile Number</label>
                            <input type="number" id="MobileNumber" name="MobileNumber" value=$mobile>
                        </div> 
                </section>
        
                <section class="personalInfo">
                    <div>
                        <h2>Profile Info</h2>
                        <span>Fill in the data for Mobile Number and One Time Password</span>
                    </div>
                    
    
    
                    <div class="forInput">
                        <h4>Personal Data</h4>

                        <label for="fname">First name</label>
                        <input type="text" id="fname" name="fname">
        
                        <label for="mname">Middle name</label>
                        <input type="text" id="mname" name="mname">
        
                        <label for="lname">Last name</label>
                        <input type="text" id="lname" name="lname">
        
                        <label for="date">Date of Birth</label>
                        <input type="date" id="date" name="date">
        
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender">
                            <option value="male"></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
        
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                </section>
            </div>
            
            <div>
                <section class="addressinfo">
                    <div>
                        <h2>Address Information</h2>
                        <span>Fill in the data for your Address</span>
                    </div>
                    
                    <div class="forInput">
                        <h4>Address Data</h4>

                        <label for="country">Country</label>
                        <input type="text" id="country" name="country">
                        
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province">
            
                        <label for="barangay">Barangay</label>
                        <input type="text" id="barangay" name="barangay">
            
                        <label for="city">City / Municipality</label>
                        <input type="text" id="city" name="city">
                    </div>
        
                </section>
                
                <section class="othercon">

                    <div>
                        <h2>Alternative Contact Information</h2>
                        <span>Fill in the data for your Address</span>

                    </div>
    
                    <div class="forInput">
                        <h4>Alternate Contact Data</h4>
                    
                        <label for="alternatecontact">Alternate Contact Number</label>
                        <input type="number" id="alternatecontact" name="alternatecontact">
                        
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email">
                    </div>
                </section>
            </div>
            
           
    
    
            
            <button class="submit" type="submit">UPDATE</button>
            <button class="cancel">CANCEL</button>
    
        </form>
        
    </div>
</body>
</html>
HTML;


?>