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


echo <<<HTML
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
                <li id="account">Account</li>
                <li id="contact">Contact Us</li>
                <li id="faqs">FAQs</li>
            </ul>
        </div>
    </nav>

    <!-- ======================= BODY ======================= -->

    <h1>Update Information</h1>

    <div class="form-container">

        <form action="/Sim Registartion Project/php/summary.php" method="post">

            <div>
                
                 <section class="mobile info">

                    <div>
                        <h2>Mobile Number Data</h2>
                        <span>Fill in the data for your Alternative Contacts</span>
                    </div>
    
                    <div class="forInput">
                        <h4>Mobile Number Data</h4>
                    
                        <label for="MobileNumber">Mobile Number</label>
                        <input type="number" id="MobileNumber" name="MobileNumber" required>
                    </div>
                </section>
        
                <section class="personalInfo">
                    <div>
                        <h2>Profile Info</h2>
                        <span>Fill in the data for your profile</span>
                    </div>
        
                    <div class="forInput">
                        <h4>Personal Data</h4>

                        <label for="fname">First name</label>
                        <input type="text" id="fname" name="fname" required>
        
                        <label for="mname">Middle name</label>
                        <input type="text" id="mname" name="mname" required>
        
                        <label for="lname">Last name</label>
                        <input type="text" id="lname" name="lname" required>
        
                        <label for="date">Date of Birth</label>
                        <input type="date" id="date" name="date" required>
        
                        <label for="gender">Gender</label>
                        <select id="gender" name="gender" required>
                            <option value="male"></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </section>

                <section class="password">
                    <div>
                        <h2>Password</h2>
                        <span>Create a strong Password</span>
                    </div>
                    
                    <div class="forInput">
                        <h4>Personal Data</h4>
        
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
    
                        <label for="repassword">Re-enter Password</label>
                        <input type="password" id="repassword" name="repassword" required>
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
                        <input type="text" id="country" name="country" required>
                        
                        <label for="province">Province</label>
                        <input type="text" id="province" name="province" required>
            
                        <label for="barangay">Barangay</label>
                        <input type="text" id="barangay" name="barangay" required>
            
                        <label for="city">City / Municipality</label>
                        <input type="text" id="city" name="city" required>
                    </div>
        
                </section>
                
                <section class="altcon">

                    <div>
                        <h2>Alternative Contact</h2>
                        <span>Fill in the data for your Alternative Contacts</span>
                    </div>
    
                    <div class="forInput">
                        <h4>Alternate Contact Data</h4>
                    
                        <label for="alternatecontact">Alternate Contact Number</label>
                        <input type="number" id="alternatecontact" name="alternatecontact" required>
                        
                        <label for="email">Email Address</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                </section>
            </div>

            <div class="buttons">
                <button class="cancel">CANCEL</button>
                <button class="submit" type="submit">CONFIRM</button>    
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

</body>
</html>
HTML;


?>