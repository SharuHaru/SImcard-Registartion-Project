<?php

include 'config.php';

$num = $_POST['number'];
echo $num;

if(isset($_GET['lognum'])){
    $num = $_GET['lognum'];
}



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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Sim Registartion Project/css/login.css">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <title><?php echo "$fname " . "$mname " . "$lname " . "Account"?></title>
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

        <main>
            <div class="users">
                <div class="userimg">
                    <img src="/Sim Registartion Project/Images/frog.jpg" alt="">
                </div>

                <div class="summary">
                    <span><b>Name:</b> <span><?php echo "$fname " . "$mname " . "$lname "?></span></span>
                    <span><b>Date of Birth:</b> <span><?php echo "$date"?></span></span>
                    <span><b>Address:</b> <span><?php echo "$country " . "$province, " . "$barangay " . "$city "?></span></span>
                    <span><b>Email Address:</b> <span> <?php echo "$email"?></span></span>
                    <span><b>Gender: </b> <span><?php echo "$gender"?></span></span>
                    <span><b>Mobile Number: </b> <span><?php echo "$mobile"?></span></span>
                    <span><b>Alternative Contact Number: </b> <span><?php echo "$alt"?></span></span>
                </div>

                
            </div>

            <div class="yousure">
                <img src="/Sim Registartion Project/Images/danger.png" alt="danger">
                <h3>Are you sure you want to delete your account?</h3>
                <span>*You may not be able to recover your account after you confirm this action, are you sure you want to delete your account?</span>
                <div class="buttonq">
                    <?php
                        echo <<<HTML
                            <button class="cancel">CANCEL</button>
                            <button><a href="./delete.php?deleteid=$userid">CONFIRM</a></button>
                        HTML;
                     ?>

                     
                    
                </div>
            </div>
            
            <div class="buttons">
                <div>
                    <?php
                        echo <<<HTML
                            <button class="update"><a href="./update.php?updateid=$userid">EDIT INFORMATION</a></button>
                        HTML;
                     ?>
                    <button class="delete">DELETE ACCOUNT</button>
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
        const del = document.querySelector('.delete');
        del.addEventListener('click', function() {
            const sure = document.querySelector('.yousure');
            sure.style.display = 'flex';

            const main = document.querySelector('main');
            main.style.backgroundColor = '#363636';
        });

        const can = document.querySelector('.cancel');
        can.addEventListener('click', function() {
            const sure = document.querySelector('.yousure');
            sure.style.display = 'none';

            const main = document.querySelector('main');
            main.style.backgroundColor = '#E9F1FA';
        });
    </script>
</body>
</html>
