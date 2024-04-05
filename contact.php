<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Crypto Quotient</title>
        <meta charset="UTF-8"./>
        <meta http-equiv="X-UA-Compatible" content="IE-Edge"./>
        <meta name="viewport" content="widht-device-widht, intial-scale=1.0"./>
        <title> Crypto Quotient</title>
        <link rel="stylesheet" href="/erc/css/common.css"./> 
        <link rel="stylesheet" href="/erc/css/index.css"./> 
        <link rel="stylesheet" href="/erc/css/about.css"./> 
        <link rel="shortcut icon" href="/erc/images/C.png" type="image/png">
    </head>
    <body>
         <!--this is for navigation bar-->
         <nav style="background-color: white;" >
            <img src="/erc/images/C.png" alt="Logo" class="logo-img1" >
            <img src="/erc/images/Crypto.png" alt="Logo" class="logo-img " />
            <button class="f-right nav-button" id="nav-search-button"> 
                <a href="index.php" > Home </a>
            </button>
            <button class="f-right nav-button" id="nav-signin-button">
                <a href="Coins.php" > Coins</a>
            </button>
            <button class="f-right nav-button" id="nav-signin-button">
                <a href="about.php" > About</a>
            </button>
         </nav>
         <!--this is for main section-->
         <section class="gridSection contactSection">
        <div class="contactformContainer">
            <h1 class="sectionHeader" style="text-align:center ;margin-bottom:2rem; color:darkblue">Get in touch</h1>
            <form action="connect.php" class="contactForm" method="post">
                <div>
                    <input type="text" name="fullname"  placeholder="full name" class="contactInput">
                    <input type="text" name="email"  placeholder="Email" class="contactInput">
                </div>                               
                <textarea name="message" type="text" cols="15" rows="5" placeholder="Message" class="contactInput" style="margin-left:4rem; overflow-x: hidden; width:97rem; margin-right:4rem ; widht:cal(100vh- 5rem)"></textarea>
                <button type="submit" class="btn primaryBtn contactBtn" name="submit" style="margin-left:46rem ; height:2rem; margin-bottom:3re; width755">Submit</button>
               
            </form>
        </div>
        <div class="sectionPic bouncepic contactPic" id="sectionPic">
            <img src="./img/contact-img.png" alt="">
        </div>
    </section>

    <h1 class="addressHeader" style="color:darkblue; margin-top:1rem"><u>Find us Quickly</u></h1>
    <div class="address">
        <div class="eachAddress" style="color:darkblue;text-align:center ; margin-left:28rem; margin-top:-3rem">
            <h1>India</h1>
            <p>Phone: (+91)1234567890</p>
            <p>Address: 264 Pine Pitch RdBuffalo Mills, Gandhinagar, 380008</p>
            <p style="margin-bottom:3rem; ">Email: support@cryptoquotient.com</p>
        </div>
    </div>   
        

         <!--this is for footer-->
         <footer class="footer-" style="margin-top:-2rem">
         
         <div class="joinSection">
            <div class="joinDesc">
                <h1 class="sectionHeader">Join with us</h1>
                <br>
                <pre class="sectionPara" style="font-family: unna"><i>Once you have created your account, you can track coins from website.
With no commissions and a simple user interface, Crypto Quotient is 
the most reliable way to trade for Cryptocurrency.</i>
                </pre>

            </div>
            <button class="btn primaryBtn" ><a href="signIn.php" > Join Now</a></button>
        </div>

        <div class="footerlinksContainer">
            <div class="footerAboutus">
                <img src="./img/logo-white.png" alt="">
                
                <div class="footersociallinkContainer">
                    <img class="sociallink" src="./img/fabook-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/twitter-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/inkedin-icon-white.svg" alt="">
                    <img class="sociallink" src="./img/whatsapp-icon-white.svg" alt="">
                </div>
            </div>

            <div class="footerlink" style="margin-top:-5rem ;margin-left:-10rem">
                <h1 class="linkTitle">Explore</h1>
                <a href="about.php" class="eachLink">About us</a>
                <a href="#" class="eachLink">FAQ</a>
                <a href="#" class="eachLink">Blog</a>
                <a href="contact.php" class="eachLink">Contact</a>
            </div>

            <div class="footerlink" style="margin-top:-5rem ;margin-left:-5rem">
                <h1 class="linkTitle">Service</h1>
                <a href="#" class="eachLink">Mining</a>
                <a href="#" class="eachLink">Control Data</a>
                <a href="#" class="eachLink">Design</a>
                <a href="#" class="eachLink">Security</a>
            </div>

            <div class="footerlink" style="margin-top:-5rem ;margin-left:0rem">
                <h1 class="linkTitle">Resource</h1>
                <a href="#" class="eachLink">Style Guide</a>
                <a href="#" class="eachLink">Change Log</a>
                <a href="#" class="eachLink">License</a>
            </div>
        </div>
        <p class="d-inline copyright" style="margin-left:0.5rem; "> &copy; <u>Crypto Quotient developed by Eva Shah </u></p>
            <a href="https://github.com/evashah22" target="_blank">
                <img class="footer-img f-right footer-img1"  src="/erc/images/logo.png" alt="Github logo" style="margin-right:1rem" >
            </a>
         </footer>
        <script src="/erc/js/common.js"></script>
        <script src="/erc/js/index.js"></script>
        
    </body>
</html>