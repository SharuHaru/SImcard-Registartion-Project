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
$stmt->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Sim Registartion Project/css/summary.css">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <title>Profile Summary</title>
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

        <main>
            <h1>Profile Summary</h1>

            <div class="summary">
                <span><b>Name:</b> <span><?php echo "$firstName " . "$midName " . "$lastName "?></span></span>
                <span><b>Date of Birth:</b> <span><?php echo "$dateofBirth"?></span></span>
                <span><b>Address:</b> <span><?php echo "$country " . "$province, " . "$barangay " . "$city "?></span></span>
                <span><b>Email Address:</b> <span> <?php echo "$email"?></span></span>
                <span><b>Gender: </b> <span><?php echo "$gender"?></span></span>
                <span><b>Alternative Contact Number: </b> <span><?php echo "$altcon"?></span></span>

                <label class="checkbox-label">
                    <span class="checkbox"><input type="checkbox"></span>
                    <span class="text">I hereby attest that I personally accomplished the registration and the information are true in compliance to RA 11934, An Act Requiring the Registration of Subscriber Identity Module.</span>
                </label>

                <div class="buttons">
                    <!-- <button class="back">BACK</button> -->
                    <button class="register">REGISTER</button> 
                </div>
            </div>

            
    </main>





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
    <script>
        const but = document.querySelector('.register');

        but.addEventListener('click', function() {
        window.location.replace("/Sim Registartion Project/html/account.html");
    });
    </script>

</body>
</html>