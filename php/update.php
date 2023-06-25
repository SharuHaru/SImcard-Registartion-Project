<?php 

include 'config.php';

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
}

$query = "SELECT MobileNumber FROM userstbl WHERE UserID = ?";
$stmt = $link->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    // Access the primary key value
    $mobile = $row['MobileNumber'];
}

if(isset($_POST['submit'])) {
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

    echo $firstName;


    $sql = "UPDATE userstbl SET FirstName = ?, MiddleName = ?, LastName = ?, DateofBirth = ?, Gender = ?, Password = ?, Country = ?, Province = ?, Barangay = ?, City = ?, AltNumber = ?, Email = ? WHERE UserID = $id";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("ssssssssssis", $firstName, $midName, $lastName, $dateofBirth, $gender, $password, $country, $province, $barangay, $city, $altcon, $email);
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        header("Location: /Sim Registartion Project/php/login.php?lognum=$mobile");
        exit(); 
    } else {
        echo "No rows were updated";
    }
    $stmt->close();
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


// echo <<<HTML

// HTML;


?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="/Sim Registartion Project/css/update.css">
<head>
<link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
<title>Update</title>
</head>
<body>
      <!-- ======================= NAVIGATION BAR ======================= -->
      <nav>
        <div class="site-logo">
            <div class="logo">Sim Registration</div>
        </div>

        <div class="link-div">
            <ul>
                <li id="home">Home</li>
                <li id="about">About</li>
                <li class="active-li" id="account">Account</li>
                <li id="contact">Contact Us</li>
                <li id="faqs">FAQs</li>
            </ul>
        </div>
    </nav>

    <!-- ======================= BODY ======================= -->

    <h1>Update Profile Information</h1>

    <div class="form-container">

        <form method="post">

            <div>
                <section class="personalInfo">
                    <div>
                        <h2>Profile Info</h2>
                        <span>Update the data for your profile</span>
                    </div>
        
                    <div class="forInput">
                        <h4>Personal Data</h4>

                        <label for="fname">First name</label>
                        <input type="text" id="fname" name="fname" value=<?php echo $fname;?> required>
        
                        <label for="mname">Middle name</label>
                        <input type="text" id="mname" name="mname" value=<?php echo $mname;?> required>
        
                        <label for="lname">Last name</label>
                        <input type="text" id="lname" name="lname" value=<?php echo $lname;?> required>
        
                        <label for="date">Date of Birth</label>
                        <input type="date" id="date" name="date" value=<?php echo $date;?> required>
        
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value=<?php echo $gender;?>><?php echo $gender;?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            
                        </select>
                    </div>
                </section>

                <section class="password">
                    <div>
                        <h2>Password</h2>
                        <span>Update Your Password</span>
                    </div>
                    
                    <div class="forInput">
                        <h4>Password Data</h4>
        
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value=<?php echo $password;?> required>
    
                        <label for="repassword">Re-enter Password</label>
                        <input type="password" id="repassword" name="repassword" required>
                    </div>
                </section>
            </div>
            
            <div>
                <section class="addressinfo">
                    <div>
                        <h2>Address Information</h2>
                        <span>Update the data for your Address</span>
                    </div>
                    
                    <div class="forInput">
                        <h4>Address Data</h4>

                        <label for="country">Country</label>
                        <input type="text" id="country" name="country" value=<?php echo $country;?> required>
                        
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province" value=<?php echo $province;?> required>
            
                        <label for="barangay">Barangay</label>
                        <input type="text" id="barangay" name="barangay" value=<?php echo $barangay;?> required>
            
                        <label for="city">City / Municipality</label>
                        <input type="text" id="city" name="city" value=<?php echo $city;?> required>
                    </div>
        
                </section>
                
                <section class="altcon">

                    <div>
                        <h2>Alternative Contact</h2>
                        <span>Update the data for your Alternative Contacts</span>
                    </div>
    
                    <div class="forInput">
                        <h4>Alternate Contact Data</h4>
                    
                        <label for="alternatecontact">Alternate Contact Number</label>
                        <input type="number" id="alternatecontact" name="alternatecontact" value=<?php echo $alt;?> required>
                        
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" value=<?php echo $email;?> required>
                    </div>
                </section>
            </div>

            <div class="buttons">
                <button>CANCEL</button>
                <button type="submit" name="submit" class="update">UPDATE</button>    
            </div>
            
        </form>

        
        
    </div>

    <!-- ============================ FOOTER ======================== -->
    <footer>
        <div class="footer1">
            <div class="footer-logo">
                <div class="footlogo">Sim Registration</div>
            </div>
    
            <span>&#x24B8;2023 Sim Registration Inc.</span>
            <ul>
                <li><img src="/Sim Registartion Project/Images/fb-icon.png" alt="facebook"></li>
                <li><img src="/Sim Registartion Project/Images/insta-icon.png" alt="insta"></li>
                <li><img src="/Sim Registartion Project/Images/twitter-icon.png" alt="twitter"></li>
                <li><img src="/Sim Registartion Project/Images/yt-icon.png" alt="youtube"></li>
            </ul>
        </div>
    
        <div class="footer2">
            <ul>
                <li id="contacts">Contact Us</li>
                <li id="abouts">About Us</li>
                <li id="term">Term of Use</li>
                <li id="privacy">Privacy Policy</li>
            </ul>
        </div>
        
    
    </footer>

    <script src="/Sim Registartion Project/javascript/navfooter.js"></script>  
</body>
</html>