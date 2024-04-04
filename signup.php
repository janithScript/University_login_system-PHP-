<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
}
nav a{
        text-decoration: none;
        Color: #fff;
        font-size: 25px;
    }
    nav a span{
        color: rgb(223,66,66);
    }

form {
    width: 50%;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 12px 28px 0px, rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(255, 255, 255, 0.05) 0px 0px 0px 1px inset;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

input {
    width: 100%;
    padding: 8px;
    margin-bottom: 15px;
    box-sizing: border-box;
    border: 1px solid rgb(185,11,11);
    border-radius: 4px;
}

input[type="submit"] {
    background-color: rgb(223,66,66) ;
    color: #fff;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: rgb(223,66,66) ;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
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
         <h1>Sign Up</h1>

    </section>

    <form action="./sgnup.action.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="job_title">Job Title:</label>
        <input type="text" name="job_title" required><br>

        <label for="salary">Salary:</label>
        <input type="text" name="salary" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br>

        <input type="submit" value="Sign Up">
    </form>

    <?php if (isset($error)) echo "<p>$error</p>"; ?>


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

<script src="https://kit.fontawesome.com/e0246156ae.js" crossorigin="anonymous"></script>


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