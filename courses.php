<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Courses</title>
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
         <h1>Our Course</h1>

    </section>

<!----------------------- Courses page -------------------------->
<section class="course">
    <h1>Course we offer</h1>
    <p>special advantage to take good profession & follow your passion</p>
    <div class="row">
        <div class="course-col">
            <h3>Intermidiate</h3>
            <p>We can not do anything without our dedication.
                 Your future in your hand.Don't drop it</p>
        </div>
        <div class="course-col">
            <h3>Degree</h3>
            <p>We can not do anything without our dedication.
                 Your future in your hand.Don't drop it</p>
        </div>
        <div class="course-col">
            <h3>Post Graduation</h3>
            <p>We can not do anything without our dedication.
                 Your future in your hand.Don't drop it</p>
        </div>
    </div>
</section>

<!---------------------Facilities ------------------>

<section class="facilities">
    <h1>Our Facilities</h1>
    <p>Special advantage to take good profession & follow your passion</p>
    <div class="row">
        <div class="facilities-col">
            <img src="./eduford_img/library.png" >
            <h3>World-class Library</h3>
            <p>We can not do anything without our dedication.
                Your future in your hand.Don't drop it</p>
        </div>
        <div class="facilities-col">
            <img src="./eduford_img/basketball.png" >
            <h3>Largest Play Ground</h3>
            <p>We can not do anything without our dedication.
                Your future in your hand.Don't drop it</p>
        </div>
        <div class="facilities-col">
            <img src="./eduford_img/cafeteria.png" >
            <h3>Tasty and Healthy Food</h3>
            <p>We can not do anything without our dedication.
                Your future in your hand.Don't drop it</p>
        </div>
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