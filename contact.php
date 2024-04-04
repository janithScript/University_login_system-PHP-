<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

    <style>
        .nav-links a span {
        background-color: rgb(223,66,66) !important; 
        padding: 8px 12px;
        border-radius: 5px;
        transition: 0.5s;
        color: #fff;
    }
    .nav-links a span:hover{
        background-color: rgb(225,108,143) !important;
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
         }
    .hero-btn:hover{
        border: #f44336;
        background: #f44336;
        transition: 1s;
        color: #f0f0f0;
    }
    nav a{
        text-decoration: none;
        Color: #fff;
        font-size: 25px;
    }
    nav a span{
        color: rgb(223,66,66);
    }
    </style>

</head>
<body>
    <section class="sub-header">
         <nav>
         <a href="./index.php">My <span> University </span></a>
            <div class="nav-links" id="navLinks">
             <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./about.php">ABOUT</a></li>
                    <li><a href="./courses.php">COURSE</a></li>
                    <li><a href="./contact.php">CONTACT</a></li>
                    <li><a  href="./login.php"> <Span>Log In </Span></a></li>
                    <li><a  href="./signup.php"> <Span>Sign Up </Span></a></li>
                </ul>
             
            </div>
            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
         </nav>
         <h1>Contact Us</h1>

    </section>

<!----------------------- Contact Us -------------------------->

<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126742.22254068253!2d79.86124299999997!3d6.927078600000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a2d3e1a1f1b%3A0xe505e16b84fb506e!2sLanka%20Hospitals!5e0!3m2!1sen!2slk!4v1673089556384!5m2!1sen!2slk"
     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>



<section class="contact-us">

    <div class="row">
        <div class="contact-col">
            <div>
                <img src="./eduford_img/home icon.png">
                <span>
                    <h5>Havalock city,</h5>
                    <p>Colombo, Sri Lanka.</p>
                </span>
            </div>
            <div>
                <img src="./eduford_img/icons8-iphone-se-24.png">
                <span>
                    <h5>+9477********</h5>
                    <p>Everyday 6.00 am to 11.00 pm</p>
                </span>
            </div>
            <div>
                <img src="./eduford_img/envelope-icon.png">
                <span>
                    <h5>campus@gmail.com</h5>
                    <p>e-mail us for query</p>
                </span>
            </div>
        </div>
        <div class="contact-col">

        <form action="./contact.action.php" method="post">
            <input type="text" name="namec"placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter e-mail" required>
            <input type="text" name="subject" placeholder="Enter your subject" required>
            <textarea rows="8" name="message" placeholder="Message" required></textarea>
            <button type="submit" class="hero-btn red-btn"> Send Message</button>
        </form>
        </div>

</section>
<!-----------------------Footer-------------------------->

<section class="footer">
    <h4>About Us</h4>
    <p>We can not do anything without our dedication.
        Your future in your hand.Don't drop it</p>
    <div class="icons">
       <a href=""><img src="./eduford_img/facebook-icon.png" ></a>
       <a href=""><img src="./eduford_img/instagram-icon.png" ></a>
       <a href=""><img src="./eduford_img/twitter-icon.png" ></a>
       <a href=""><img src="./eduford_img/whatsapp-icon.png" ></a>
    </div>
    <p class="made"><i>All is yours </i></p>
</section>
<!------------------javaScript for toggle Menu------------------>
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0"
    }
    function hideMenu(){
        navLinks.style.right="-200px"
    }
</script>    
</body>
</html>