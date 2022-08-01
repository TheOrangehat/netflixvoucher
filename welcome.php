<?php

session_start();

// require_once 'counter.php';

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
ini_set('display_errors', '0');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix Gift Accounts</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles/welcome.css">
</head>

<body>
    <div class="Home">
        <nav>
            <div class="left">
                <li>Home</li>
            </div>
            <div class="right">
                <li  id="plansbtn" onclick="getscrollto(this.id)">Plans</li>
                <li id="howitbtn" onclick="getscrollto(this.id)">How it Works</li>
                <li ><?php echo $_SESSION['username'] ?></li>
                <li onclick="window.open('./logout.php')">Log out</li>
                <!-- <li onclick="window.open('https:\\www.google.com')">Log in</li> -->
            </div>
        </nav>
        <div class="TopContainer">
            <div class="text">
                <h2>Hi! <?php echo $_SESSION['username'] ?></h2>
                <p>Just Choose Your plan to claim reward.</p>
            </div>
            <div class="plansdiv">
                <div class="plan">

                    <div class="logo">
                        <img src="./Images/logo.PNG" alt="">

                    </div>
                    <div class="planTxt">
                        <h3>Mobile</h3>
                        <div class="cricel">Popular</div>
                        <div class="cricel">480p</div>
                    </div>
                    <div onclick="getscrollto('planOptions')" class="planOptions">
                        <span>Get Now</span>
                    </div>
                </div>
                <div class="plan">

                    <div class="logo">
                        <img src="./Images/logo.PNG" alt="">

                    </div>
                    <div class="planTxt">
                        <h3>Basic</h3>
                        <div class="cricel">Good</div>
                        <div class="cricel">480p</div>
                    </div>
                    <div onclick="getscrollto('planOptions')" class="planOptions">
                        <span class="com">Coming</span>
                    </div>
                </div>
                <div class="plan">

                    <div class="logo">
                        <img src="./Images/logo.PNG" alt="">

                    </div>
                    <div class="planTxt">
                        <h3>Standard</h3>
                        <div class="cricel">Better</div>
                        <div class="cricel">1080p</div>
                    </div>
                    <div onclick="getscrollto('planOptions')" class="planOptions">
                        <span class="com">Coming</span>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    <div class="Howitworks">
<h3 class="planh3">Plans</h3>
        <div class="Planscom">
            
            <div class="plan">
                <div class="topimg">
                    <img src="./Images/planback.avif" alt="">
                </div>
                <div class="planD">
                    <h3>Mobile</h3>
                    <ul>
                    <li>28 Days</li>
                    <li>480P Resolution</li>
                    <li>You can Watch Mobile, Tablet</li></ul>
                </div>
                <div class="buttons">
                    
                    <button class="button">15 Ads</button>
                    <button onclick="window.open('./ad.php')" class="button">Get Now!</button>
                </div>

            </div>
            <div class="plan">

                <div class="topimg">
                    <img src="./Images/planback.avif" alt="">
                </div>
                <div class="planD">
                    <h3>Basic</h3>
                    <ul>
                    <li>28 Days</li>
                    <li>480P Resolution</li>
                    <li>You can Watch Mobile, Tablet, TV, Desktop</li></ul>
                </div>
                <div class="buttons">
                    
                    <button class="button">20 Ads</button>
                    <button onclick="window.open('./register.php')" class="button" disabled>Get Now!</button>
                </div>

            </div>
            <div class="plan">
                <div class="topimg">
                    <img src="./Images/planback.avif" alt="">
                </div>
                <div class="planD">
                    <h3>Standard</h3>
                    <ul>
                    <li>28 Days</li>
                    <li>1080p Resolution</li>
                    <li>You can Watch Mobile, Tablet, TV, Desktop</li></ul>

                </div>
                <div class="buttons">
                    
                    <button class="button">20 Ads</button>
                    <button onclick="window.open('./register.php')" class="button" disabled>Get Now!</button>
                </div>

            </div>
        </div>

        <div class="getmail">
            <div class="left">

            </div>
            <div class="right">
                <h3>Get Account Email and Password</h3>
                <p>Get Netflix account as winnig prize after getting selected.</p><br>
                <p>You can add email to get notification</p>
            </div>
        </div>
    </div>

    <!-- <div class="WatchAd">
        <h3>Track Your progress</h3>
        
        <input type="email" name="Email" id="useremail"> <span style="color: #fff;">or</span>
        <input type="number" name="phone" id="userphone"><br>
       <a  href="./register.php" > <button>GO!</button></a>
    </div> -->

    <div class="Adex">
        <script type="text/javascript">
            atOptions = {
                'key' : '0c1c6a51853a71ef6c55daafcc856694',
                'format' : 'iframe',
                'height' : 300,
                'width' : 160,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/0c1c6a51853a71ef6c55daafcc856694/invoke.js"></scr' + 'ipt>');
        </script> <script type="text/javascript">
            atOptions = {
                'key' : '0c1c6a51853a71ef6c55daafcc856694',
                'format' : 'iframe',
                'height' : 300,
                'width' : 160,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/0c1c6a51853a71ef6c55daafcc856694/invoke.js"></scr' + 'ipt>');
        </script> <script type="text/javascript">
            atOptions = {
                'key' : '0c1c6a51853a71ef6c55daafcc856694',
                'format' : 'iframe',
                'height' : 300,
                'width' : 160,
                'params' : {}
            };
            document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.effectivecreativeformats.com/0c1c6a51853a71ef6c55daafcc856694/invoke.js"></scr' + 'ipt>');
        </script>

    </div>

    <footer>
        <p>&copy;All right reserved <a href="./index.html">netflix.martycart.com</a></p>
    </footer>




<script src="./javascript/basic.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
</body>

</html>