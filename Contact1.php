<?php

try{
    $db = new mysqli ("localhost", "root", "", "contact_db");

} catch (Exception $exc){
    echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $is_insert = $db->query("INSERT INTO `data`(`name`, `email`, `Message`) VALUES ('$name','$email','$msg')");

    if($is_insert == TRUE){
        echo "<h2>Thanks, your request is submitted.</h2>";
        exit();
    }

}
?>


<!DOCTYPE html1>
<html>
<head>
   
    <title>Contact us</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="css/Style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Martian+Mono:wght@300;400;600;700&display=swap" rel="stylesheet">

</head>
<body1>
<section class="sub-header">
        <nav>
            <a href="page1.html"><img src="Images/Black_And_White_Modern_Vintage_Retro_Brand_Logo-removebg-preview.png"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="Homepage.php">Home</a></li>
                    <li><a href="aboutpage.php">About</a></li>
                    <li><a href="Resources.php">Resources</a></li>
                    <li><a href="Blogs.php">Blog</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="login_form.php">Login/Signup</a></li>
                </ul>
            </div>
        </nav>
        <h1>Contact</h1>
    </section>

    <section class="background1">
    <div class="container2">
        <div class="contact-box1">
            <div class="left">
            <div class="contact-info">
        <h4>For Your Enquiries</h4>
        <p>Contact Number: (+60167981249) </p>
        <p>Befrienders Hotline:</br> (+603-76272929)</p>
    </div>
            </div>
            <div class="right">
            <form method="post" action="">
                <h4>Contact Us</h4>
                <input type="text" name="name" class="field" placeholder="Your Name">
                    <input type="email" name="email" class="field" placeholder="Your Email">
                    <textarea name="msg" class="field" placeholder="Your Message"></textarea>
                    <button type="submit" class="btn1">Send</button>
                </form>
                </form>
            </div>
        </div>
    </div>
    </section>
</body1>
</html1>